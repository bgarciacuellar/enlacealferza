<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\PayrollType;
use App\Models\Ticket;
use App\Models\User;
use App\Traits\helpers;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use helpers;

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
            "address" => "required",
            "phone_number" => "required",
            "logo" => "nullable",
        ]);

        if ($request->hasFile('logo')) {
            $logo = $this->uploadImage($request->file('logo'), 'logos');
        } else {
            $logo = '';
        }

        $companyCreated = Company::create([
            "name" => $request->name,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
            "logo" => $logo,
        ]);



        return redirect()->route('company.details', $companyCreated->id)->with('success', 'Creado');
    }

    public function details($id)
    {
        $roles = ['cliente', 'capturista', 'validador'];
        $payrolls = PayrollType::all();
        $company = Company::findOrFail($id);
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
        return view('company.details', compact('company', 'companyEmployees', 'incidents', 'roles', 'payrolls'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "address" => "required",
            "phone_number" => "required",
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
            "address" => $request->address,
            "phone_number" => $request->phone_number,
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
}
