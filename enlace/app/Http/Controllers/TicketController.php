<?php

namespace App\Http\Controllers;

use App\Mail\PaidTicket;
use App\Mail\TicketCreated;
use App\Mail\UploadFileMail;
use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\CompanyOnCharge;
use App\Models\PayrollType;
use Auth;
use App\Models\Ticket;
use App\Models\TicketComment;
use App\Models\TicketFileHistory;
use App\Models\User;
use App\Traits\File;
use App\Traits\helpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    use File, helpers;

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin,ejecutivo'])->except('details', 'uploadFileToRecord', 'addComment', 'nextStep', 'lastStep', 'uploadPreinvoice');
    }

    public function list()
    {
        $ticketsArray = Ticket::all()->toArray();
        $companies = Company::all();
        $payrolls = PayrollType::all();

        $ticketsMap = function ($ticketItem) {
            $company = Company::where('id', $ticketItem['company'])->first();
            $limit_date = Carbon::parse($ticketItem['limit_date']);
            $status = $this->statusConvert($ticketItem['status']);
            return array(
                "id" => $ticketItem['id'],
                "category" => $ticketItem['category'],
                "limit_date" => $limit_date->format('d/m/Y'),
                "company" => $company->name,
                "status" => $status,
            );
        };
        $tickets = array_map($ticketsMap, $ticketsArray);


        return view('ticket.list', compact('tickets', 'companies', 'payrolls'));
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'category' => 'required',
                'company' => 'required',
                'limit_date' => 'required',
                'comment' => 'nullable',
            ],
        );

        $currentUser = Auth::user();

        $ticketCreated = Ticket::create([
            'user_id' => $currentUser->id,
            'status' => 1,
            'limit_date' => $request->limit_date,
            'category' => $request->category,
            'company' => $request->company,
        ]);

        if (trim($request->comment)) {
            TicketComment::create([
                'user_id' => $currentUser->id,
                'ticket_id' => $ticketCreated->id,
                'comment' => $request->comment,
            ]);
        }

        $employees = CompanyEmployee::where('company_id', $request->company)->get('user_id');
        $company = Company::where('id', $request->company)->first('name')->name;

        $message = new TicketCreated($currentUser->name, $ticketCreated->id, $company);
        $emails = [];
        foreach ($employees as $employee) {
            $employeeEmail = User::where('id', $employee->user_id)->first('email')->email;
            $emails[] = $employeeEmail;
        }
        Mail::to($emails)->send($message);

        // Mail::to("socialmedia@alferza.mx")->send($message);
        return redirect()->route('ticket.details', $ticketCreated->id)->with('success', 'Ticket Creado');
    }

    public function details($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->statusString = $this->statusConvert($ticket->status);
        $company = Company::findOrFail($ticket->company);
        $payrolls = PayrollType::all();

        $ticketFilesHistoryArray = TicketFileHistory::where('ticket_id', $ticketId)->orderBy('id', 'DESC')->get()->toArray();
        $ticketFilesHistoryMap = function ($ticketFileHistoryItem) {
            $user = User::where('id', $ticketFileHistoryItem['user_id'])->first();
            $createdAt = Carbon::parse($ticketFileHistoryItem['created_at']);
            return array(
                "id" => $ticketFileHistoryItem['id'],
                "user_name" => $user ? $user->name : "Usuario",
                "file" => $ticketFileHistoryItem['file'],
                "created_at" => $createdAt->format('d/m/Y'),
            );
        };
        $ticketFilesHistory = array_map($ticketFilesHistoryMap, $ticketFilesHistoryArray);

        $ticketCommentsArray = TicketComment::where('ticket_id', $ticket->id)->orderBy('id', 'DESC')->get()->toArray();
        $ticketCommentsMap = function ($ticketCommentItem) {
            $user = User::where('id', $ticketCommentItem['user_id'])->first();
            $createdAt = Carbon::parse($ticketCommentItem['created_at']);
            return array(
                "id" => $ticketCommentItem['id'],
                "user_name" => $user ? $user->name : "Usuario",
                "comment" => $ticketCommentItem['comment'],
                "created_at" => $createdAt->format('d/m/Y'),
            );
        };
        $ticketComments = array_map($ticketCommentsMap, $ticketCommentsArray);

        $ticketowner = User::where('id', $ticket->user_id)->first();
        $ticketownerAdditionalInfo = AdditionalUserInfo::where('id', $ticket->user_id)->first();

        return view('ticket.details', compact('ticket', 'ticketComments', 'ticketFilesHistory', 'ticketowner', 'ticketownerAdditionalInfo', 'company', 'payrolls'));
    }

    public function uploadFileToRecord(Request $request, $ticket)
    {
        $request->validate([
            "file" => "required"
        ]);

        $ticketExists = Ticket::where('id', $ticket)->first();

        if (!$ticketExists) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        }

        $path = storage_path('app/public/incidencias');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $completePath = $request->file('file')->store('public/incidencias');
        $getFileName = explode("/", $completePath);
        $fileName = end($getFileName);

        $currentUser = Auth::user();

        $fileCreated = TicketFileHistory::create([
            'user_id' => $currentUser->id,
            'ticket_id' => $ticket,
            'file' => $fileName,
        ]);

        $employees = CompanyEmployee::where('company_id', $ticketExists->company)->get('user_id');
        $company = Company::where('id', $ticketExists->company)->first('name')->name;

        $message = new UploadFileMail($currentUser->name, $ticketExists->id, $company, $ticketExists->category);
        $message->attach(public_path() . '/storage/incidencias/' . $fileCreated->file);
        $emails = [];
        foreach ($employees as $employee) {
            $employeeEmail = User::where('id', $employee->user_id)->first('email')->email;
            $emails[] = $employeeEmail;
        }
        Mail::to($emails)->send($message);

        return back()->with('success', 'Archivo agregado');
    }

    public function addComment(Request $request, $ticket)
    {
        $request->validate([
            "comment" => "required"
        ]);

        $ticketExists = Ticket::where('id', $ticket)->first();

        if (!$ticketExists) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        }
        $currentUser = Auth::user();
        TicketComment::create([
            'user_id' => $currentUser->id,
            'ticket_id' => $ticket,
            'comment' => $request->comment,
        ]);
        return back()->with('success', 'Comentario agregado');
    }

    public function update(Request $request, $ticket)
    {
        $request->validate(
            [
                'category' => 'required',
                'limit_date' => 'required',
            ],
        );

        $updateTicket = Ticket::findOrFail($ticket);

        $updateTicket->update([
            'category' => $request->category,
            'limit_date' => $request->limit_date,
        ]);

        return back()->with('success', 'Ticket Modificado');
    }

    public function nextStep($id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->update([
            'status' => $ticket->status + 1,
        ]);

        return back()->with('success', 'Siguiente Paso');
    }
    public function lastStep($id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->update([
            'status' => $ticket->status - 1,
        ]);

        if ($ticket->status == 3) {
            # code...
        }

        return back()->with('success', 'Paso Anterior');
    }

    public function uploadPreinvoice(Request $request, $ticket)
    {
        $request->validate(
            [
                'preinvoice' => 'required',
            ],
        );

        $updateTicket = Ticket::findOrFail($ticket);

        $path = storage_path('app/public/preinvoice');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $completePath = $request->file('preinvoice')->store('public/preinvoice');
        $getFileName = explode("/", $completePath);
        $fileName = end($getFileName);

        if ($updateTicket->preinvoices) {
            $this->deleteFile($updateTicket->preinvoices, 'preinvoice');
        }

        $updateTicket->update([
            'preinvoices' => $fileName,
        ]);

        // $employees = CompanyEmployee::where('company_id', $updateTicket->company)->get('user_id');
        // $company = Company::where('id', $updateTicket->company)->first('name')->name;

        // $message = new PaidTicket();
        // foreach ($employees as $employee) {
        //     $employeeEmail = User::where('id', $employee->user_id)->first('email');

        //     Mail::to($employeeEmail->email)->send($message);
        // }

        return back()->with('success', 'Ticket Modificado');
    }

    public function sendReminder(Request $request, $ticket)
    {
        $request->validate(
            [
                'day' => 'required',
            ],
        );

        $updateTicket = Ticket::findOrFail($ticket);

        $completePath = $request->file('preinvoice')->store('public/preinvoice');
        $getFileName = explode("/", $completePath);
        $fileName = end($getFileName);

        if ($updateTicket->preinvoices) {
            $this->deleteFile($updateTicket->preinvoices, 'preinvoice');
        }

        $updateTicket->update([
            'preinvoices' => $fileName,
        ]);

        // $employees = CompanyEmployee::where('company_id', $updateTicket->company)->get('user_id');
        // $company = Company::where('id', $updateTicket->company)->first('name')->name;

        // $message = new PaidTicket();
        // foreach ($employees as $employee) {
        //     $employeeEmail = User::where('id', $employee->user_id)->first('email');

        //     Mail::to($employeeEmail->email)->send($message);
        // }

        return back()->with('success', 'Ticket Modificado');
    }
}
