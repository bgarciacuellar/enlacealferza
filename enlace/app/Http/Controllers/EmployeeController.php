<?php

namespace App\Http\Controllers;

use App\Mail\ImssRegistrationCreated;
use App\Mail\ImssRegistrationUpdate;
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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

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
        $tickets = Ticket::where('company', $companyID)->where('status', '!=', 5)->orderBy('id', 'desc')->get();
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
        $archivedTickets = Ticket::where('company', $companyID)->where('status', 5)->orderBy('id', 'desc')->get();
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
            "user_name" => "required",
            "birth_certificate" => "required",
            "identification" => "required",
            "social_security_number" => "required",
            "certificate_tax_status" => "required",
            "proof_address" => "required",
            "curp" => "required",
            "email" => "required",
            "phone_number" => "required",
            "register_date" => "required",

            "bank_name" => "required",
            "bank_account" => "required",
            "bank_clabe" => "required",
            "bank_format" => "nullable",
            "infonavit_retention" => "required",
            "file_credit" => "nullable",
            "fonacot_credit" => "nullable",

            "imss_monthly_salary" => "required",
            "monthly_real_salary" => "required",
            "payment_period" => "required",
            "payroll_name" => "required",
            "register_type" => "required",

            "emergency_contact_full_name" => "required",
            "emergency_contact_phone_number" => "required",
            "emergency_contact_relationship" => "required",
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
        $certificateTaxStatus = $this->uploadCompanyFile($request->file('certificate_tax_status'), 'imss', $companyID);
        $proofAddress = $this->uploadCompanyFile($request->file('proof_address'), 'imss', $companyID);
        $curp = $this->uploadCompanyFile($request->file('curp'), 'imss', $companyID);

        $infonavitRetention = $this->uploadCompanyFile($request->file('infonavit_retention'), 'imss', $companyID);
        if ($request->hasFile('bank_format')) {
            $bankFormat = $this->uploadCompanyFile($request->file('bank_format'), 'imss', $companyID);
        } else {
            $bankFormat = '';
        }
        if ($request->hasFile('file_credit')) {
            $fileCredit = $this->uploadCompanyFile($request->file('file_credit'), 'imss', $companyID);
        } else {
            $fileCredit = '';
        }
        if ($request->hasFile('fonacot_credit')) {
            $fonacotCredit = $this->uploadCompanyFile($request->file('fonacot_credit'), 'imss', $companyID);
        } else {
            $fonacotCredit = '';
        }

        RegisterImss::create([
            'company_id' => $companyId,
            'user_name' => $request->user_name,
            'birth_certificate' => $birthCertificate,
            'identification' => $identification,
            'social_security_number' => $socialSecurityNumber,
            'certificate_tax_status' => $certificateTaxStatus,
            'proof_address' => $proofAddress,
            'curp' => $curp,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'register_date' => $request->register_date,

            'bank_name' => $request->bank_name,
            'bank_account' => $request->bank_account,
            'bank_clabe' => $request->bank_clabe,
            'bank_format' => $bankFormat,
            'infonavit_retention' => $infonavitRetention,
            'file_credit' => $fileCredit,
            'fonacot_credit' => $fonacotCredit,

            'imss_monthly_salary' => $request->imss_monthly_salary,
            'monthly_real_salary' => $request->monthly_real_salary,
            'payment_period' => $request->payment_period,
            'payroll_name' => $request->payroll_name,
            'register_type' => $request->register_type,

            'emergency_contact_full_name' => $request->emergency_contact_full_name,
            'emergency_contact_phone_number' => $request->emergency_contact_phone_number,
            'emergency_contact_relationship' => $request->emergency_contact_relationship,
        ]);

        /* $message = new ImssRegistrationCreated();
        Mail::to($request->email)->send($message); */

        return back()->with('success', 'Solicitud enviada');
    }

    public function updateRegisterImss(Request $request, $registerId)
    {
        $request->validate([
            "user_name" => "required",
            "birth_certificate" => "nullable",
            "identification" => "nullable",
            "social_security_number" => "nullable",
            "certificate_tax_status" => "nullable",
            "proof_address" => "nullable",
            "curp" => "nullable",
            "email" => "required",
            "phone_number" => "required",
            "register_date" => "required",

            "bank_name" => "required",
            "bank_account" => "required",
            "bank_clabe" => "required",
            "bank_format" => "nullable",
            "infonavit_retention" => "nullable",
            "file_credit" => "nullable",
            "fonacot_credit" => "nullable",

            "imss_monthly_salary" => "required",
            "monthly_real_salary" => "required",
            "payment_period" => "required",
            "payroll_name" => "required",
            "register_type" => "required",

            "emergency_contact_full_name" => "required",
            "emergency_contact_phone_number" => "required",
            "emergency_contact_relationship" => "required",
        ]);

        $currentUser = Auth::user();
        $companyID = CompanyEmployee::where('user_id', $currentUser->id)->first('company_id');
        $registeredImss = RegisterImss::where('id', $registerId)->where('company_id', $companyID->company_id)->firstOrFail();

        if ($request->hasFile('birth_certificate')) {
            $birthCertificate = $this->uploadCompanyFile($request->file('birth_certificate'), 'imss', $companyID->company_id);
                if ($registeredImss->birth_certificate) {
                    File::delete('storage/imss/' . $registeredImss->birth_certificate);
                }
        } else {
            $birthCertificate = $registeredImss ? $registeredImss->birth_certificate : '';
        }
        if ($request->hasFile('identification')) {
            $identification = $this->uploadCompanyFile($request->file('identification'), 'imss', $companyID->company_id);
                if ($registeredImss->identification) {
                    File::delete('storage/imss/' . $registeredImss->identification);
                }
        } else {
            $identification = $registeredImss ? $registeredImss->identification : '';
        }
        if ($request->hasFile('social_security_number')) {
            $socialSecurityNumber = $this->uploadCompanyFile($request->file('social_security_number'), 'imss', $companyID->company_id);
                if ($registeredImss->social_security_number) {
                    File::delete('storage/imss/' . $registeredImss->social_security_number);
                }
        } else {
            $socialSecurityNumber = $registeredImss ? $registeredImss->social_security_number : '';
        }
        if ($request->hasFile('certificate_tax_status')) {
            $certificateTaxStatus = $this->uploadCompanyFile($request->file('certificate_tax_status'), 'imss', $companyID->company_id);
                if ($registeredImss->certificate_tax_status) {
                    File::delete('storage/imss/' . $registeredImss->certificate_tax_status);
                }
        } else {
            $certificateTaxStatus = $registeredImss ? $registeredImss->certificate_tax_status : '';
        }
        if ($request->hasFile('proof_address')) {
            $proofAddress = $this->uploadCompanyFile($request->file('proof_address'), 'imss', $companyID->company_id);
                if ($registeredImss->proof_address) {
                    File::delete('storage/imss/' . $registeredImss->proof_address);
                }
        } else {
            $proofAddress = $registeredImss ? $registeredImss->proof_address : '';
        }
        if ($request->hasFile('curp')) {
            $curp = $this->uploadCompanyFile($request->file('curp'), 'imss', $companyID->company_id);
                if ($registeredImss->curp) {
                    File::delete('storage/imss/' . $registeredImss->curp);
                }
        } else {
            $curp = $registeredImss ? $registeredImss->curp : '';
        }

        if ($request->hasFile('infonavit_retention')) {
            $infonavitRetention = $this->uploadCompanyFile($request->file('infonavit_retention'), 'imss', $companyID->company_id);
                if ($registeredImss->infonavit_retention) {
                    File::delete('storage/imss/' . $registeredImss->infonavit_retention);
                }
        } else {
            $infonavitRetention = $registeredImss ? $registeredImss->infonavit_retention : '';
        }
        if ($request->hasFile('bank_format')) {
            $bankFormat = $this->uploadCompanyFile($request->file('bank_format'), 'imss', $companyID);
            if ($registeredImss->bank_format) {
                File::delete('storage/imss/' . $registeredImss->bank_format);
            }
        } else {
            $bankFormat = $registeredImss->bank_format;
        }
        if ($request->hasFile('file_credit')) {
            $fileCredit = $this->uploadCompanyFile($request->file('file_credit'), 'imss', $companyID);
            if ($registeredImss->file_credit) {
                File::delete('storage/imss/' . $registeredImss->file_credit);
            }
        } else {
            $fileCredit = $registeredImss->file_credit;
        }
        if ($request->hasFile('fonacot_credit')) {
            $fonacotCredit = $this->uploadCompanyFile($request->file('fonacot_credit'), 'imss', $companyID);
            if ($registeredImss->fonacot_credit) {
                File::delete('storage/imss/' . $registeredImss->fonacot_credit);
            }
        } else {
            $fonacotCredit = $registeredImss->fonacot_credit;
        }

        $registeredImss->update([
            'user_name' => $request->user_name,
            'birth_certificate' => $birthCertificate,
            'identification' => $identification,
            'social_security_number' => $socialSecurityNumber,
            'certificate_tax_status' => $certificateTaxStatus,
            'proof_address' => $proofAddress,
            'curp' => $curp,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'register_date' => $request->register_date,

            'bank_name' => $request->bank_name,
            'bank_account' => $request->bank_account,
            'bank_clabe' => $request->bank_clabe,
            'bank_format' => $bankFormat,
            'infonavit_retention' => $infonavitRetention,
            'file_credit' => $fileCredit,
            'fonacot_credit' => $fonacotCredit,

            'imss_monthly_salary' => $request->imss_monthly_salary,
            'monthly_real_salary' => $request->monthly_real_salary,
            'payment_period' => $request->payment_period,
            'payroll_name' => $request->payroll_name,
            'register_type' => $request->register_type,

            'emergency_contact_full_name' => $request->emergency_contact_full_name,
            'emergency_contact_phone_number' => $request->emergency_contact_phone_number,
            'emergency_contact_relationship' => $request->emergency_contact_relationship,
        ]);

        /* $message = new ImssRegistrationUpdate;
        Mail::to($request->email)->send($message); */

        return back()->with('success', 'Solicitud actualizada');
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
