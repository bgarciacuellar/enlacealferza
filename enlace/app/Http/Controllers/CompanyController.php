<?php

namespace App\Http\Controllers;

use App\Mail\NewUserCreated;
use App\Models\CancelImss;
use App\Models\Company;
use App\Models\CompanyAdditionalAddress;
use App\Models\CompanyAdditionalContact;
use App\Models\CompanyAdditionalPhoneNumber;
use App\Models\CompanyCredit;
use App\Models\CompanyEmployee;
use App\Models\Credit;
use App\Models\PayrollType;
use App\Models\RegisterImss;
use App\Models\Ticket;
use App\Models\User;
use App\Traits\helpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    use helpers;
    public $paymentsPeriod = ['semanal', 'quincenal', 'mensual'];

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin,cliente,capturista,validador'])->only('updateFiles', 'deleteFiles');
        $this->middleware(['auth', 'roles:admin,ejecutivo,nominista,finanzas,pagos,cobranza'])->only('details', 'registerImssDetails','registerImssAccepted', 'cancelImssDetails', 'cancelImssCanceled');
        $this->middleware(['auth', 'roles:admin'])->except('updateFiles', 'deleteFiles', 'details', 'registerImssDetails', 'registerImssAccepted', 'cancelImssDetails', 'cancelImssCanceled');
    }

    public function list()
    {
        $companies = Company::where('is_active', 1)->get();
        return view('company.list', compact('companies'));
    }
    public function listSearch(Request $request)
    {
        $companies = Company::where('is_active', 1)->where("name", "like", "%" . $request->name . "%")->get();
        return view('company.list', compact('companies'));
    }

    public function grid()
    {
        $companies = Company::where('is_active', 1)->get();
        return view('company.grid', compact('companies'));
    }

    public function create(Request $request)
    {
        $request->validate([
            "name" => "required",
            "business_name" => "nullable",
            "rfc" => "nullable",
            "address" => "nullable",
            "phone_number" => "nullable",
            "email" => "nullable",
            "logo" => "nullable",
        ]);

        if ($request->hasFile('logo')) {
            $logo = $this->uploadImage($request->file('logo'), 'logos');
        } else {
            $logo = '';
        }

        $companyCreated = Company::create([
            "name" => $request->name,
            "business_name" => $request->business_name,
            "rfc" => $request->rfc,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "logo" => $logo,
        ]);



        return redirect()->route('company.details', $companyCreated->id)->with('success', 'Creado');
    }

    public function delete(Request $request)
    {
        $company = Company::findOrFail($request->company);

        if ($company->is_active) {
            $status = 0;
            $message = 'Empresa eliminada';
        }else {
            $status = 1;
            $message = 'Empresa activa';
        }

        $company->update([
            "is_active" => $status,
        ]);

        return back()->with('success', $message);
    }

    public function details($id)
    {
        $roles = ['cliente', 'capturista', 'validador'];
        $payrolls = PayrollType::where('company_id', $id)->get();
        $company = Company::findOrFail($id);
        $paydaysArray = explode(',', $company->paydays);
        $paydaysArrayTrim = array();
        foreach ($paydaysArray as $paydayArray) {
            $paydaysArrayTrim[] = trim($paydayArray);
        }
        $company->paydaysArray = $paydaysArrayTrim;
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

        $registersImss = RegisterImss::where('company_id', $id)->get();
        $cancelsImss = CancelImss::where('company_id', $id)->get();
        foreach ($cancelsImss as $cancelImss) {
            $cancelImss->cancel_date_formated = Carbon::parse($cancelImss->cancel_date)->format('d/m/Y');
        }
        foreach ($registersImss as $registerImss) {
            $registerImss->register_date_formated = Carbon::parse($registerImss->register_date)->format('d/m/Y');
        }

        return view('company.details', compact('company', 'companyEmployees', 'incidents', 'roles', 'payrolls', 'paymentsPeriod', 'credits', 'additionalsAddresses', 'additionalsPhoneNumbers', 'additionalsContacts', 'registersImss', 'cancelsImss'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "business_name" => "nullable",
            "rfc" => "nullable",
            "address" => "nullable",
            "phone_number" => "nullable",
            "email" => "nullable",
            "website" => "nullable",
            "paydays" => "nullable",
            "logo" => "nullable",
        ]);
        
        $company = Company::findOrFail($id);
        if ($request->hasFile('logo')) {
            $logo = $this->uploadImage($request->file('logo'), 'logos');
            if ($company->logo) {
                $this->deleteFile($company->logo, 'logos');
            }
        } else {
            $logo = $company->logo ? $company->logo : '';
        }

        $company->update([
            "name" => $request->name,
            "business_name" => $request->business_name,
            "rfc" => $request->rfc,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "website" => $request->website,
            "paydays" => implode(', ', $request->paydays),
            "logo" => $logo,
        ]);

        return back()->with('success', 'Actualizado');
    }

    public function updateFiles(Request $request, $id)
    {
        $request->validate([
            "constitutive_act" => "nullable",
            "tax_identification_card" => "nullable",
            "proof_residency" => "nullable",
            "employer_registration" => "nullable",
            "legal_represantative_identification" => "nullable",
            "legal_represantative_power" => "nullable",
        ]);

        $route = "records_files";
        $company = Company::findOrFail($id);
        if ($request->hasFile('constitutive_act')) {
            $constitutiveAct = $this->uploadCompanyFile($request->file('constitutive_act'), $route, $id);
        } else {
            $constitutiveAct = $company->constitutive_act ? $company->constitutive_act : '';
        }
        if ($request->hasFile('tax_identification_card')) {
            $taxIdentificationCard = $this->uploadCompanyFile($request->file('tax_identification_card'), $route, $id);
        } else {
            $taxIdentificationCard = $company->tax_identification_card ? $company->tax_identification_card : '';
        }
        if ($request->hasFile('proof_residency')) {
            $proofResidency = $this->uploadCompanyFile($request->file('proof_residency'), $route, $id);
        } else {
            $proofResidency = $company->proof_residency ? $company->proof_residency : '';
        }
        if ($request->hasFile('employer_registration')) {
            $employerRegistration = $this->uploadCompanyFile($request->file('employer_registration'), $route, $id);
        } else {
            $employerRegistration = $company->employer_registration ? $company->employer_registration : '';
        }
        if ($request->hasFile('legal_represantative_identification')) {
            $legalRepresantativeIdentification = $this->uploadCompanyFile($request->file('legal_represantative_identification'), $route, $id);
        } else {
            $legalRepresantativeIdentification = $company->legal_represantative_identification ? $company->legal_represantative_identification : '';
        }
        if ($request->hasFile('legal_represantative_power')) {
            $legalRepresantativePower = $this->uploadCompanyFile($request->file('legal_represantative_power'), $route, $id);
        } else {
            $legalRepresantativePower = $company->legal_represantative_power ? $company->legal_represantative_power : '';
        }

        $company->update([
            "constitutive_act" => $constitutiveAct,
            "tax_identification_card" => $taxIdentificationCard,
            "proof_residency" => $proofResidency,
            "employer_registration" => $employerRegistration,
            "legal_represantative_identification" => $legalRepresantativeIdentification,
            "legal_represantative_power" => $legalRepresantativePower,
        ]);

        return back()->with('success', 'Actualizado');
    }

    public function deleteFiles(Request $request, $companyId){
        $request->validate([
            "file" => "required",
        ]);

        $company = Company::findOrFail($companyId);
        $fileType = $request->file;
        
        if (!$company->$fileType) {
            return back()->with('error', 'Intentalo de nuevo');
        }

        $this->deleteFile($company->$fileType, "records_files");
        $company->update([
            $fileType => null
        ]);

        return back()->with('success', '-');
    }

    /* IMSS */
    public function registerImssDetails($companyId, $registerImssId)
    {
        $company = Company::findOrFail($companyId);
        
        $registerImss = RegisterImss::findOrFail($registerImssId);
        $registerImss->statusString = $registerImss->status ? $registerImss->status : 'En espera';

        return view('imss.registered.details', compact('company', 'registerImss'));
    }

    public function registerImssAccepted($companyId, $registerImssId)
    {
        $registerImss = RegisterImss::where('id', $registerImssId)->where('company_id', $companyId)->firstOrFail();
        $registerImss->update([
            "status" => 'Autorizado'
        ]);

        return back()->with('success', 'Autorizado');
    }

    public function cancelImssDetails($companyId, $cancelImssId)
    {
        $company = Company::findOrFail($companyId);
        
        $cancelsImss = CancelImss::findOrFail($cancelImssId);
        $cancelsImss->statusString = $cancelsImss->status ? $cancelsImss->status : 'En espera';

        return view('imss.canceled.details', compact('company', 'cancelsImss'));
    }

    public function cancelImssCanceled($companyId, $cancelImssId)
    {
        $cancelImss = CancelImss::where('id', $cancelImssId)->where('company_id', $companyId)->firstOrFail();
        $cancelImss->update([
            "status" => 'Autorizado'
        ]);

        return back()->with('success', 'Autorizado');
    }
    /* IMSS */


    // Employees
    public function createEmployee(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|unique:users,email",
            "role" => "required",
            "password" => "required",
        ]);

        $company = Company::findOrFail($id);

        $employeeCreated = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
            "password" => bcrypt($request->password),
        ]);

        CompanyEmployee::create([
            "user_id" => $employeeCreated->id,
            "company_id" => $company->id,
            "role" => $request->role,
        ]);

        $message = new NewUserCreated($request->name, $request->email, $request->password, $company->name);
        Mail::to($request->email)->send($message);

        return back()->with('success', '');
    }

    public function udpateEmployee(Request $request, $id)
    {
        $request->validate([
            "user_id" => "required",
            "name" => "required",
            "email" => "required|unique:users,email," . $request->user_id,
            "role" => "required",
            'change_password' => 'nullable',
            'password' => $request->change_password ? 'required|min:8' :'nullable',
        ]);

        $company = Company::findOrFail($id);

        $employee = CompanyEmployee::where("user_id", $request->user_id)->where("company_id", $id)->firstOrFail();
        $user = User::findOrFail($request->user_id);


        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
        ]);

        if ($request->change_password) {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }

        $employee->update([
            "role" => $request->role,
        ]);

        return back()->with('success', 'Actualizado');
    }

    public function deleteEmployee(Request $request, $companyId)
    {
        $request->validate([
            "user_id" => "required"
        ]);
        $employee = CompanyEmployee::where("user_id", $request->user_id)->where('company_id', $companyId)->first();
        if (!$employee) {
            return back()->with('error', 'Error, intentalo de nuevo');    
        }
        $employee->delete();
        $employee = User::find($request->user_id)->delete();
        return back()->with('success', 'Empleado Eliminado');
        

    }

    // Credits

    public function creditDetails($creditId)
    {
        $credit = CompanyCredit::findOrFail($creditId);
        $usedCreditsHistory = Credit::where('company_credit_id', $creditId)->where('movement_type', 0)->get();
        $paidCreditsHistory = Credit::where('company_credit_id', $creditId)->where('movement_type', 1)->get();
        $company = Company::findOrFail($credit->company_id);

        return view('company.credit_details', compact('credit', 'company', 'usedCreditsHistory', 'paidCreditsHistory'));
    }

    public function createNewCredit(Request $request, $companyId)
    {
        $request->validate([
            "total_amount" => "required",
            "comment" => "nullable",
            "due_date" => "required",
        ]);

        $company = Company::findOrFail($companyId);
        CompanyCredit::create([
            "company_id" => $company->id,
            "total_amount" => $request->total_amount,
            "comment" => $request->comment,
            "due_date" => $request->due_date,
        ]);
        return back()->with('success', 'Créditos agregados');
    }

    public function updateCredit(Request $request, $creditId)
    {
        $request->validate([
            "total_amount" => "required",
            "comment" => "nullable",
            "due_date" => "required",
            "status" => "required",
        ]);

        $credit = CompanyCredit::findOrFail($creditId);
        $credit->update([
            "total_amount" => $request->total_amount,
            "comment" => $request->comment,
            "due_date" => $request->due_date,
            "status" => $request->status,
        ]);

        return back()->with('success', 'Datos actualizados');
    }
    public function deleteCredit(Request $request)
    {
        $credit = CompanyCredit::findOrFail($request->credit_id);

        if ($credit->used > 0) {
            return back()->with('error', 'No se puede eliminar ya que se han usado los creditos');
        }
        if ($credit->paid > 0) {
            return back()->with('error', 'No se puede eliminar ya que se ha pagado esté credito');
        }
        $credit->delete();
        return back()->with('success', 'Credito eliminado');
    }

    public function useCredits(Request $request, $ticketId)
    {
        $request->validate([
            "amount" => "required",
            "credit" => "required",
        ]);

        if ($request->amount < 0) {
            return back()->with('error', 'Es necesario un valor positivo');
        }

        $credit = CompanyCredit::findOrFail($request->credit);
        $availableCredits = $credit->total_amount - $credit->used;

        if ($availableCredits < $request->amount) {
            return back()->with('error', 'No cuenta con los créditos suficientes');
        }

        $currentUsedCredits = $credit->used + $request->amount;

        $credit->update([
            "used" => $currentUsedCredits
        ]);

        Credit::create([
            "ticket_id" => $ticketId,
            "company_credit_id" => $credit->id,
            "amount" => $request->amount,
            "movement_type" => 0,
        ]);

        return back()->with('success', 'Credito aplicado');
    }

    public function payCredits(Request $request, $creditId)
    {
        $request->validate([
            "amount" => "required",
        ]);

        if ($request->amount < 0) {
            return back()->with('error', 'Es necesario un valor positivo');
        }

        $credit = CompanyCredit::findOrFail($creditId);
        $availableCredits = $credit->total_amount - $credit->paid;

        if ($availableCredits < $request->amount) {
            return back()->with('error', 'La cantidad es mayor a lo que se debe');
        }

        $currentPaidCredits = $credit->paid + $request->amount;

        $credit->update([
            "paid" => $currentPaidCredits
        ]);

        Credit::create([
            "company_credit_id" => $creditId,
            "amount" => $request->amount,
            "movement_type" => 1,
        ]);

        return back()->with('success', 'Credito pagado');
    }

    public function deleteCreditMovement(Request $request, $creditId)
    {
        $request->validate([
            "paid_credit_id" => "required"
        ]);

        $credit = CompanyCredit::findOrFail($creditId);
        $creditMovement = Credit::findOrFail($request->paid_credit_id);

        if (!$creditMovement->movement_type) {
            return back()->with('error', 'Error, intentelo de nuevo');
        }

        $paidBalance = $credit->paid - $creditMovement->amount;

        $creditMovement->delete();
        $credit->update([
            "paid" => $paidBalance
        ]);
        return back()->with('success', 'Credito eliminado');
    }
    // Credits

    // Additional addresses
    public function createAdditionalAddress(Request $request, $id)
    {
        $request->validate([
            "address" => "required",
        ]);

        Company::findOrFail($id);

        CompanyAdditionalAddress::create([
            "company_id" => $id,
            "address" => $request->address,
        ]);

        return back()->with('success', '-');
    }

    public function updateAdditionalAddress(Request $request, $id)
    {
        $request->validate([
            "additional_address_id" => "required",
            "address" => "required",
        ]);

        $company = Company::findOrFail($id);

        $additionalAddress = CompanyAdditionalAddress::where('id', $request->additional_address_id)->where('company_id', $company->id)->firstOrFail();

        $additionalAddress->update([
            "address" => $request->address,
        ]);

        return back()->with('success', '-');
    }

    public function deleteAdditionalAddress(Request $request)
    {
        $request->validate([
            "additional_address_id" => "required"
        ]);
        CompanyAdditionalAddress::find($request->additional_address_id)->delete();

        return back()->with('success', 'Dirección secundaria eliminado');
    }
    // Additional addresses

    // Additional phone numbers
    public function createAdditionalPhoneNumber(Request $request, $id)
    {
        $request->validate([
            "phone_number" => "required",
        ]);

        Company::findOrFail($id);

        CompanyAdditionalPhoneNumber::create([
            "company_id" => $id,
            "phone_number" => $request->phone_number,
        ]);

        return back()->with('success', '-');
    }

    public function updateAdditionalPhoneNumber(Request $request, $id)
    {
        $request->validate([
            "additional_phone_number_id" => "required",
            "phone_number" => "required",
        ]);

        $company = Company::findOrFail($id);

        $additionalPhoneNumber = CompanyAdditionalPhoneNumber::where('id', $request->additional_phone_number_id)->where('company_id', $company->id)->firstOrFail();

        $additionalPhoneNumber->update([
            "phone_number" => $request->phone_number,
        ]);

        return back()->with('success', '-');
    }

    public function deleteAdditionalPhoneNumber(Request $request)
    {
        $request->validate([
            "additional_phone_number_id" => "required"
        ]);
        CompanyAdditionalPhoneNumber::find($request->additional_phone_number_id)->delete();

        return back()->with('success', 'Teléfono secundario eliminado');
    }
    // Additional phone numbers

    // Additional contact
    public function createAdditionalContact(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "email" => "nullable",
            "phone_number" => "required",
        ]);

        Company::findOrFail($id);

        CompanyAdditionalContact::create([
            "company_id" => $id,
            "name" => $request->name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
        ]);

        return back()->with('success', '-');
    }

    public function updateAdditionalContact(Request $request, $id)
    {
        $request->validate([
            "additional_contact_id" => "required",
            "name" => "required",
            "email" => "nullable",
            "phone_number" => "required",
        ]);

        $company = Company::findOrFail($id);

        $additionalPhoneNumber = CompanyAdditionalContact::where('id', $request->additional_contact_id)->where('company_id', $company->id)->firstOrFail();

        $additionalPhoneNumber->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
        ]);

        return back()->with('success', '-');
    }

    public function deleteAdditionalContact(Request $request)
    {
        $request->validate([
            "additional_contact_id" => "required"
        ]);

        CompanyAdditionalContact::find($request->additional_contact_id)->delete();

        return back()->with('success', 'Contacto secundario eliminado');
    }
    // Additional contact

}
