<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyAdditionalAddress;
use App\Models\CompanyCredit;
use App\Models\CompanyEmployee;
use App\Models\Credit;
use App\Models\PayrollType;
use App\Models\Ticket;
use App\Models\User;
use App\Traits\helpers;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class CompanyController extends Controller
{
    use helpers;
    public $paymentsPeriod = ['semanal', 'quincenal', 'mensual'];

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
    }

    public function list()
    {
        $companies = Company::all();
        return view('company.list', compact('companies'));
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

    public function details($id)
    {
        $roles = ['cliente', 'capturista', 'validador'];
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
        return view('company.details', compact('company', 'companyEmployees', 'incidents', 'roles', 'payrolls', 'paymentsPeriod', 'credits', 'additionalsAddresses'));
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
            "logo" => "nullable",
        ]);

        if ($request->hasFile('logo')) {
            $logo = $this->uploadImage($request->file('logo'), 'logos');
        } else {
            $logo = '';
        }
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
            "logo" => $logo,
        ]);

        return back()->with('success', 'Actualizado');
    }

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

        return back()->with('success', '');
    }

    public function udpateEmployee(Request $request, $id)
    {
        $request->validate([
            "user_id" => "required",
            "name" => "required",
            "email" => "required|unique:users,email," . $request->user_id,
            "role" => "required",
        ]);

        $company = Company::findOrFail($id);

        $employee = CompanyEmployee::where("user_id", $request->user_id)->where("company_id", $id)->firstOrFail();
        $user = User::findOrFail($request->user_id);


        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
        ]);

        $employee->update([
            "role" => $request->role,
        ]);

        return back()->with('success', 'Actualizado');
    }

    public function deleteEmployee(Request $request)
    {
        $request->validate([
            "user_id" => "required"
        ]);
        $employee = User::find($request->user_id)->delete();
        $employee = CompanyEmployee::where("user_id", $request->user_id)->delete();


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
        $employee = CompanyAdditionalAddress::find($request->additional_address_id)->delete();

        return back()->with('success', 'Dirección secundaria eliminado');
    }
    // Additional addresses

}
