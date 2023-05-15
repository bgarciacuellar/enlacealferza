<?php

namespace App\Http\Controllers;

use App\Mail\DownloadedCategaFile;
use App\Mail\PaidTicket;
use App\Mail\PayrollAuthorized;
use App\Mail\PayrollDenied;
use App\Mail\PayrollReceiptEmail;
use App\Mail\TicketCreated;
use App\Mail\UploadedIncident;
use App\Mail\UploadedPayroll;
use App\Mail\UploadFileMail;
use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyCredit;
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
    public $paymentsPeriod = ['semanal', 'quincenal', 'mensual'];

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['auth', 'roles:admin,ejecutivo'])->except('details', 'uploadFileToRecord', 'addComment', 'nextStep', 'lastStep', 'uploadPreinvoice', 'getPayrollByCompany', 'downloadCategaFile');
    }

    public function list()
    {
        $ticketsArray = Ticket::where('status', '!=', '5')->orderBy('id', 'desc')->get()->toArray();
        $companies = Company::all();
        $payrolls = PayrollType::all();
        $paymentsPeriod = $this->paymentsPeriod;

        $ticketsMap = function ($ticketItem) {
            $company = Company::where('id', $ticketItem['company'])->first();
            $created_at = Carbon::parse($ticketItem['created_at']);
            $status = $this->statusConvert($ticketItem['status']);
            return array(
                "id" => $ticketItem['id'],
                "category" => $ticketItem['category'],
                "created_at" => $created_at->format('d/m/Y'),
                "company" => $company->name,
                "status" => $status,
            );
        };
        $tickets = array_map($ticketsMap, $ticketsArray);


        return view('ticket.list', compact('tickets', 'companies', 'payrolls', 'paymentsPeriod'));
    }

    public function archivedList()
    {
        $archivedTicketsArray = Ticket::where('status', 5)->orderBy('id', 'desc')->get()->toArray();

        $archivedTicketsMap = function ($archivedTicketItem) {
            $company = Company::where('id', $archivedTicketItem['company'])->first();
            $created_at = Carbon::parse($archivedTicketItem['created_at']);
            $status = $this->statusConvert($archivedTicketItem['status']);
            return array(
                "id" => $archivedTicketItem['id'],
                "category" => $archivedTicketItem['category'],
                "created_at" => $created_at->format('d/m/Y'),
                "company" => $company->name,
                "status" => $status,
            );
        };
        $archivedTickets = array_map($archivedTicketsMap, $archivedTicketsArray);


        return view('ticket.archived_list', compact('archivedTickets'));
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'category' => $request->ticket_type == 'nómina' ? 'required' : 'nullable',
                'company' => 'required',
                'limit_date' => $request->ticket_type == 'nómina' ? 'required' : 'nullable',
                'comment' => 'nullable',
                'master_file' => 'nullable',
                'payment_period' => 'required',
                'ticket_type' => 'required',
            ],
        );

        $currentUser = Auth::user();

        $ticketCreated = Ticket::create([
            'user_id' => $currentUser->id,
            'status' => 1,
            'limit_date' => $request->limit_date,
            'category' => $request->category,
            'company' => $request->company,
            'payment_period' => $request->payment_period,
            'ticket_type' => $request->ticket_type    
        ]);

        if ($request->hasFile('master_file')) {
            $fileFullName = pathinfo($request->file('master_file')->getClientOriginalName(), PATHINFO_FILENAME);
            $fileExtension = pathinfo($request->file('master_file')->getClientOriginalName(), PATHINFO_EXTENSION);
            $fileName = $fileFullName  . "_" . $ticketCreated->id . "." . $fileExtension;
            $request->file('master_file')->storeAs('public/archivos_maestro', $fileName);
        }else {
            $fileName = '';
        }


        $ticketCreated->update([
            'master_file' => $fileName,
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

        return redirect()->route('ticket.details', $ticketCreated->id)->with('success', 'Ticket Creado');
    }

    public function details($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->statusString = $this->statusConvert($ticket->status);
        $ticket->statusButton = $this->statusButtons($ticket->status);
        $company = Company::findOrFail($ticket->company);
        $payrolls = PayrollType::all();
        $credits = CompanyCredit::where('status', 1)->where('company_id', $ticket->company)->get();
        $paymentsPeriod = $this->paymentsPeriod;

        $ticketFilesHistoryArray = TicketFileHistory::where('ticket_id', $ticketId)->orderBy('id', 'DESC')->get()->toArray();
        $ticketFilesHistoryMap = function ($ticketFileHistoryItem) {
            $user = User::where('id', $ticketFileHistoryItem['user_id'])->first();
            $createdAt = Carbon::parse($ticketFileHistoryItem['created_at']);
            return array(
                "id" => $ticketFileHistoryItem['id'],
                "user_name" => $user ? $user->name : "Usuario de alferza",
                "role" => $user ? ucfirst($user->role) : "Cliente",
                "file" => $ticketFileHistoryItem['file'],
                "created_at" => $createdAt->format('d/m/Y H:i'),
            );
        };
        $ticketFilesHistory = array_map($ticketFilesHistoryMap, $ticketFilesHistoryArray);

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

        return view('ticket.details', compact('ticket', 'ticketComments', 'ticketFilesHistory', 'ticketowner', 'ticketownerAdditionalInfo', 'company', 'payrolls', 'paymentsPeriod', 'credits'));
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
        $filesCount = TicketFileHistory::where("ticket_id", $ticketExists->id)->get()->count();

        $path = storage_path('app/public/incidencias');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $imageFullName = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
        $imageExtension = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_EXTENSION);
        $imageName = $imageFullName  . "_" . $ticketExists->id . "_" . $filesCount . "." . $imageExtension;

        $request->file('file')->storeAs('public/incidencias', $imageName);

        $currentUser = Auth::user();

        $fileCreated = TicketFileHistory::create([
            'user_id' => $currentUser->id,
            'ticket_id' => $ticket,
            'file' => $imageName,
        ]);

        $employees = CompanyEmployee::where('company_id', $ticketExists->company)->get('user_id');
        $company = Company::where('id', $ticketExists->company)->first('name')->name;

        $message = new UploadFileMail($currentUser->name, $ticketExists->id, $company, $ticketExists->category);
        // $message->attach(public_path() . '/storage/incidencias/' . $fileCreated->file);
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
        $updateTicket = Ticket::findOrFail($ticket);
        $request->validate(
            [
                'category' => $updateTicket->ticket_type == 'nómina' ? 'required' : 'nullable',
                'limit_date' => $updateTicket->ticket_type == 'nómina' ? 'required' : 'nullable',
                'payment_period' => 'required',
            ],
        );

        if($updateTicket->ticket_type == 'nómina'){
            $updateTicket->update([
                'category' => $request->category,
                'limit_date' => $request->limit_date,
                'payment_period' => $request->payment_period,
            ]);
        }else{
            $updateTicket->update([
                'payment_period' => $request->payment_period,
            ]);
        }

        return back()->with('success', 'Ticket Modificado');
    }

    public function nextStep($id)
    {
        $ticket = Ticket::findOrFail($id);
        if ($ticket->ticket_type == 'catega' && $ticket->status == 1) {
            $ticket->update([
                'status' => 5,
            ]);
        }else {
            if ($ticket->status == 2.5) {
                $ticket->update([
                    'status' => 3,
                ]);
            } else {
                $ticket->update([
                    'status' => $ticket->status + 1,
                ]);
            }
        }

        $userCreatedTicket = User::find($ticket->user_id);
        $userNameCreatedTicket = $userCreatedTicket ? $userCreatedTicket->name : "Usuario de alferza";
        $company = Company::where('id', $ticket->company)->first('name')->name;

        if ($ticket->status == 2) {
            $users = CompanyOnCharge::where('company_id', $ticket->company)->get('user_id');
            $message = new UploadedIncident($userNameCreatedTicket, $ticket->id, $company, $ticket->category);
            $emails = [];
            foreach ($users as $user) {
                $employeeEmail = User::where('id', $user->user_id)->where('role', 'nominista')->first('email');
                if (!$employeeEmail) {
                    $employeeEmail = User::where('id', $user->user_id)->where('role', 'ejecutivo')->first('email');
                }
                if ($employeeEmail) {
                    $emails[] = $employeeEmail->email;
                }
            }
            Mail::to($emails)->send($message);
        } elseif ($ticket->status == 3) {
            $employees = CompanyEmployee::where('company_id', $ticket->company)->get('user_id');
            $message = new UploadedPayroll($userNameCreatedTicket, $ticket->id, $company);
            $emails = [];
            foreach ($employees as $employee) {
                $employeeEmail = User::where('id', $employee->user_id)->first('email');
                if ($employeeEmail) {
                    $emails[] = $employeeEmail->email;
                }
            }
            Mail::to($emails)->send($message);
        } elseif ($ticket->status == 4) {
            $users = CompanyOnCharge::where('company_id', $ticket->company)->get('user_id');
            $message = new PayrollAuthorized($userNameCreatedTicket, $ticket->id, $company);
            $emails = [];
            foreach ($users as $user) {
                $employeeEmail = User::where('id', $user->user_id)->where('role', 'nominista')->first('email');
                if (!$employeeEmail) {
                    $employeeEmail = User::where('id', $user->user_id)->where('role', 'ejecutivo')->first('email');
                }
                if (!$employeeEmail) {
                    $employeeEmail = User::where('id', $user->user_id)->where('role', 'finanzas')->first('email');
                }
                if ($employeeEmail) {
                    $emails[] = $employeeEmail->email;
                }
            }
            Mail::to($emails)->send($message);
        } elseif ($ticket->status == 5) {
            $employees = CompanyEmployee::where('company_id', $ticket->company)->get('user_id');
            $message = new PayrollAuthorized($userNameCreatedTicket, $ticket->id, $company);
            /* $message = new UploadedPayroll($userNameCreatedTicket, $ticket->id, $company); */
            $emails = [];
            foreach ($employees as $employee) {
                $employeeEmail = User::where('id', $employee->user_id)->first('email');
                if ($employeeEmail) {
                    $emails[] = $employeeEmail->email;
                }
            }
            Mail::to($emails)->send($message);
        }

        return back()->with('success', 'Siguiente Paso');
    }

    public function lastStep(Request $request, $id)
    {
        $request->validate([
            "comment" => "required"
        ]);

        $ticket = Ticket::findOrFail($id);
        $currentUser = Auth::user();

        $ticket->update([
            'status' => 2.5,
        ]);

        TicketComment::create([
            'user_id' => $currentUser->id,
            'ticket_id' => $ticket->id,
            'comment' => $request->comment,
        ]);

        $userCreatedTicket = User::find($ticket->user_id)->first();
        $company = Company::where('id', $ticket->company)->first('name')->name;

        if ($ticket->status == 2.5) {
            $users = CompanyOnCharge::where('company_id', $ticket->company)->get('user_id');
            $message = new PayrollDenied($userCreatedTicket->name, $ticket->id, $company);
            $emails = [];
            foreach ($users as $user) {
                $employeeEmail = User::where('id', $user->user_id)->where('role', 'nominista')->first('email');
                if (!$employeeEmail) {
                    $employeeEmail = User::where('id', $user->user_id)->where('role', 'ejecutivo')->first('email');
                }
                if ($employeeEmail) {
                    $emails[] = $employeeEmail->email;
                }
            }
            Mail::to($emails)->send($message);
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

        $imageFullName = pathinfo($request->file('preinvoice')->getClientOriginalName(), PATHINFO_FILENAME);
        $imageExtension = pathinfo($request->file('preinvoice')->getClientOriginalName(), PATHINFO_EXTENSION);
        $imageName = $imageFullName  . "_" . $updateTicket->id . "." . $imageExtension;

        $request->file('preinvoice')->storeAs('public/preinvoice', $imageName);

        if ($updateTicket->preinvoices) {
            $this->deleteFile($updateTicket->preinvoices, 'preinvoice');
        }

        $updateTicket->update([
            'preinvoices' => $imageName,
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

    public function uploadPayrollReceipt(Request $request, $ticket)
    {
        $request->validate(
            [
                'payroll_receipt' => 'required',
            ],
        );

        $updateTicket = Ticket::findOrFail($ticket);
        $currentUser = Auth::user();

        $path = storage_path('app/public/payroll_receipt');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $fileFullName = pathinfo($request->file('payroll_receipt')->getClientOriginalName(), PATHINFO_FILENAME);
        $fileExtension = pathinfo($request->file('payroll_receipt')->getClientOriginalName(), PATHINFO_EXTENSION);
        $fileName = $fileFullName  . "_" . $updateTicket->id . "." . $fileExtension;

        $request->file('payroll_receipt')->storeAs('public/payroll_receipt', $fileName);

        if ($updateTicket->payroll_receipt) {
            $this->deleteFile($updateTicket->payroll_receipt, 'payroll_receipt');
        }

        $updateTicket->update([
            'payroll_receipt' => $fileName,
        ]);

        $employees = CompanyEmployee::where('company_id', $updateTicket->company)->get('user_id');
        $company = Company::where('id', $updateTicket->company)->first('name')->name;

        $message = new PayrollReceiptEmail($currentUser->name, $updateTicket->id, $company);
        
        $emails = [];
        foreach ($employees as $employee) {
            $employeeEmail = User::where('id', $employee->user_id)->first('email')->email;
            $emails[] = $employeeEmail;
        }
        Mail::to($emails)->send($message);

        return back()->with('success', 'Archivo cargado');
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

    //AJAX jobs
    public function getPayrollByCompany(Request $request){
        $companyId = $request->company;

        if ($request->ajax()) {
        
        $payrolls = PayrollType::where('company_id', $companyId)->get();
        return  $payrolls;
        }
    }

    public function downloadCategaFile(Request $request, $companyId, $ticketId){
        $currentUser = Auth::user();
            if ($request->ajax()) {
            $employees = CompanyEmployee::where('company_id', $companyId)->get('user_id');
            $company = Company::where('id', $companyId)->first('name')->name;

            $message = new DownloadedCategaFile($currentUser->name, $ticketId, $company);
            foreach ($employees as $employee) {
                $employeeEmail = User::where('id', $employee->user_id)->first('email');
                Mail::to($employeeEmail->email)->send($message);
            }
            return  'Se ha enviado un correo al cliente informado que se ha descargado el archivo';
        }
    }
}
