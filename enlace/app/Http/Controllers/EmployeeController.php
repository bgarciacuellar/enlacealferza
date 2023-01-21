<?php

namespace App\Http\Controllers;

use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyAdditionalAddress;
use App\Models\CompanyAdditionalContact;
use App\Models\CompanyAdditionalEmail;
use App\Models\CompanyAdditionalPhoneNumber;
use App\Models\CompanyCredit;
use App\Models\CompanyEmployee;
use App\Models\PayrollType;
use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\TicketFileHistory;
use App\Models\User;
use App\Traits\helpers;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    use helpers;
    public $paymentsPeriod = ['semanal', 'quincenal', 'mensual'];

    function __construct()
    {
        $this->middleware(['auth', 'roles:cliente,capturista,validador']);
    }

    public function dashboard()
    {
        $user = Auth::user();

        return view('employee.dashboard', compact('user'));
    }

    public function myCompany()
    {
        $currentUser = Auth::user();
        $id = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $payrolls = PayrollType::all();
        $company = Company::findOrFail($id);
        $credits = CompanyCredit::where('company_id', $id)->get();
        $paymentsPeriod = $this->paymentsPeriod;
        $companyEmployeesArray = CompanyEmployee::where("company_id", $company->id)->get()->toArray();
        $companyEmployeesMap = function ($companyEmployeeItem) {
            $user = User::where("id", $companyEmployeeItem["user_id"])->first();
            return array(
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "role" => $user->role,
            );
        };
        $companyEmployees = array_map($companyEmployeesMap, $companyEmployeesArray);

        $incidents = Ticket::where("company", $company->id)->orderBy('id', 'DESC')->get();
        foreach ($incidents as $incident) {
            $incident->statusString = $this->statusConvert($incident->status);
        }
        $additionalsAddresses = CompanyAdditionalAddress::where('company_id', $id)->get();
        $additionalsPhoneNumbers = CompanyAdditionalPhoneNumber::where('company_id', $id)->get();
        $additionalsEmails = CompanyAdditionalEmail::where('company_id', $id)->get();
        $additionalsContacts = CompanyAdditionalContact::where('company_id', $id)->get();

        return view('employee.my_company', compact('company', 'companyEmployees', 'incidents', 'payrolls', 'paymentsPeriod', 'credits', 'additionalsAddresses', 'additionalsPhoneNumbers', 'additionalsEmails', 'additionalsContacts'));
    }

    public function tiketsList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $tickets = Ticket::where('company', $companyID)->where('status', '!=', 5)->get();
        foreach ($tickets as $ticket) {
            $ticket->statusString = $this->statusConvert($ticket->status);
        }

        return view('employee.ticket.list', compact('tickets', 'company'));
    }

    public function archivedTicketsList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $archivedTickets = Ticket::where('company', $companyID)->where('status', 5)->get();
        foreach ($archivedTickets as $ticket) {
            $ticket->statusString = $this->statusConvert($ticket->status);
        }

        return view('employee.ticket.archived_list', compact('archivedTickets', 'company'));
    }

    public function details($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->statusString = $this->statusConvert($ticket->status);
        $company = Company::findOrFail($ticket->company);

        $ticketFileHistory = TicketFileHistory::where('ticket_id', $ticketId)->orderBy('id', 'DESC')->first();
        if ($ticketFileHistory) {
            $ticketFileUser = User::where('id', $ticketFileHistory->user_id)->first();
        } else {
            $ticketFileUser = false;
        }

        $ticketCommentsArray = TicketComment::where('ticket_id', $ticket->id)->orderBy('id', 'DESC')->get()->toArray();
        $ticketCommentsMap = function ($ticketCommentItem) {
            $user = User::where('id', $ticketCommentItem['user_id'])->first();
            $createdAt = Carbon::parse($ticketCommentItem['created_at']);
            return array(
                "id" => $ticketCommentItem['id'],
                "user_name" => $user ? $user->name : "Usuario de alferza",
                "comment" => $ticketCommentItem['comment'],
                "created_at" => $createdAt->format('d/m/Y'),
            );
        };
        $ticketComments = array_map($ticketCommentsMap, $ticketCommentsArray);

        $ticketowner = User::where('id', $ticket->user_id)->first();
        $ticketownerAdditionalInfo = AdditionalUserInfo::where('user_id', $ticket->user_id)->first();

        return view('employee.ticket.details', compact('ticket', 'ticketComments', 'ticketFileHistory', 'ticketFileUser', 'ticketowner', 'ticketownerAdditionalInfo', 'company'));
    }

    public function createExtraordinario(Request $request, $ticketId)
    {
        $request->validate([
            "file" => "required",
            "observations" => "required",
        ]);

        $ticket = Ticket::findOrFail($ticketId);

        $fileFullName = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
        $fileExtension = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_EXTENSION);
        $fileName = $fileFullName  . "_" . $ticket->id . "." . $fileExtension;

        $request->file('file')->storeAs('public/extraordinario', $fileName);

        $ticket->update([
            "extraordinario_file" => $fileName,
            "observations" => $request->observations
        ]);

        return back()->with('success', 'Agregado');
    }
}
