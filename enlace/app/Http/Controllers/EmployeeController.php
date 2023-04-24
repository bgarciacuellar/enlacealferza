<?php

namespace App\Http\Controllers;

use App\Models\AdditionalUserInfo;
use App\Models\CancelImss;
use App\Models\Company;
use App\Models\CompanyAdditionalAddress;
use App\Models\CompanyAdditionalContact;
use App\Models\CompanyAdditionalPhoneNumber;
use App\Models\CompanyCredit;
use App\Models\CompanyEmployee;
use App\Models\PayrollType;
use App\Models\RegisterImss;
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
        $additionalsContacts = CompanyAdditionalContact::where('company_id', $id)->get();

        return view('employee.my_company', compact('company', 'companyEmployees', 'incidents', 'payrolls', 'paymentsPeriod', 'credits', 'additionalsAddresses', 'additionalsPhoneNumbers', 'additionalsContacts'));
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
                "created_at" => $createdAt->format('d/m/Y H:i'),
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

    /* IMSS */
    public function registerImssList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $registersImss = RegisterImss::where('company_id', $companyID)->get();
        foreach ($registersImss as $registerImss) {
            $registerImss->statusString = $registerImss->status ? $registerImss->status : 'En espera';
            $registerImss->register_date_formated = Carbon::parse($registerImss->register_date)->format('d/m/Y');
        }

        return view('imss.registered.list', compact('registersImss', 'companyID'));
    }

    public function registerImssDetails($registerImssId)
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $registerImss = RegisterImss::findOrFail($registerImssId);
        $registerImss->statusString = $registerImss->status ? $registerImss->status : 'En espera';

        return view('imss.registered.details', compact('company', 'registerImss'));
    }

    public function registerImss(Request $request, $companyId)
    {
        $request->validate([
            "birth_certificate" => "required",
            "identification" => "required",
            "social_security_number" => "required",
            "rfc" => "required",
            "proof_address" => "required",
            "curp" => "required",
            "bank_data" => "required",
            "infonavit_retention" => "required",
            "email" => "required",
            "phone_number" => "required",
            "register_date" => "required",
            "emergency_contact" => "required",
            "imss_salary" => "required",
        ]);

        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->where('company_id', $companyId)->first('company_id');
        if ($companyID) {
            $companyID = $companyID->company_id;
        }else {
            return back()->with('error', 'Hubo un error, intentelo de nuevo');
        }

        $birthCertificate = $this->uploadCompanyFile($request->file('birth_certificate'), 'imss', $companyID);
        $identification = $this->uploadCompanyFile($request->file('identification'), 'imss', $companyID);
        $socialSecurityNumber = $this->uploadCompanyFile($request->file('social_security_number'), 'imss', $companyID);
        $rfc = $this->uploadCompanyFile($request->file('rfc'), 'imss', $companyID);
        $proofAddress = $this->uploadCompanyFile($request->file('proof_address'), 'imss', $companyID);
        $curp = $this->uploadCompanyFile($request->file('curp'), 'imss', $companyID);


        RegisterImss::create([
            'company_id' => $companyId,
            'birth_certificate' => $birthCertificate,
            'identification' => $identification,
            'social_security_number' => $socialSecurityNumber,
            'rfc' => $rfc,
            'proof_address' => $proofAddress,
            'curp' => $curp,
            'bank_data' => $request->bank_data,
            'infonavit_retention' => $request->infonavit_retention,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'register_date' => $request->register_date,
            'emergency_contact' => $request->emergency_contact,
            'imss_salary' => $request->imss_salary,
        ]);

        return back()->with('success', 'Solicitud enviada');
    }

    public function deleteRegisterImssRequest(Request $request)
    {
        $request->validate([
            "request_registed" => "required",
        ]);
        $currentUser = Auth::user();
        $requestRegistered = RegisterImss::findOrFail($request->request_registed);
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->where('company_id', $requestRegistered->company_id)->first('company_id');
        if ($companyID) {
            $companyID = $companyID->company_id;
        }else {
            return back()->with('error', 'Hubo un error, intentelo de nuevo');
        }

        if ($requestRegistered->status) {
            return back()->with('error', 'Ya esta procesada y no se puede eliminar');
        }

        $this->deleteFile($requestRegistered->birth_certificate, 'imss');
        $this->deleteFile($requestRegistered->identification, 'imss');
        $this->deleteFile($requestRegistered->social_security_number, 'imss');
        $this->deleteFile($requestRegistered->rfc, 'imss');
        $this->deleteFile($requestRegistered->proof_address, 'imss');
        $this->deleteFile($requestRegistered->curp, 'imss');
        $requestRegistered->delete();

        return back()->with('success', 'Solicitud eliminada');
    }

    public function cancelImssList()
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        $cancelsImss = CancelImss::where('company_id', $companyID)->get();
        foreach ($cancelsImss as $cancelImss) {
            $cancelImss->statusString = $cancelImss->status ? $cancelImss->status : 'En espera';
            $cancelImss->cancel_date_formated = Carbon::parse($cancelImss->cancel_date)->format('d/m/Y');
        }

        return view('imss.canceled.list', compact('cancelsImss', 'companyID'));
    }

    public function cancelImssDetails($cancelImssId)
    {
        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id')->company_id;
        $company = Company::findOrFail($companyID);
        
        $cancelsImss = CancelImss::findOrFail($cancelImssId);
        $cancelsImss->statusString = $cancelsImss->status ? $cancelsImss->status : 'En espera';

        return view('imss.canceled.details', compact('company', 'cancelsImss'));
    }

    public function cancelImss(Request $request, $companyId)
    {
        $request->validate([
            "name" => "required",
            "cancel_date" => "required",
            "notes" => "required",
            "leave_receipt" => "required",
        ]);

        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->where('company_id', $companyId)->first('company_id');
        if ($companyID) {
            $companyID = $companyID->company_id;
        }else {
            return back()->with('error', 'Hubo un error, intentelo de nuevo');
        }

        CancelImss::create([
            'company_id' => $companyId,
            'name' => $request->name,
            'cancel_date' => $request->cancel_date,
            'notes' => $request->notes,
            'leave_receipt' => $request->leave_receipt,
        ]);

        return back()->with('success', 'Solicitud enviada');
    }

    public function deleteCancelImssRequest(Request $request)
    {
        $request->validate([
            "request_cancel" => "required",
        ]);
        $currentUser = Auth::user();
        $requestCancel = CancelImss::findOrFail($request->request_cancel);
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->where('company_id', $requestCancel->company_id)->first('company_id');
        if ($companyID) {
            $companyID = $companyID->company_id;
        }else {
            return back()->with('error', 'Hubo un error, intentelo de nuevo');
        }

        if ($requestCancel->status) {
            return back()->with('error', 'Ya esta procesada y no se puede eliminar');
        }

        $requestCancel->delete();

        return back()->with('success', 'Solicitud eliminada');
    }
    /* IMSS */
}
