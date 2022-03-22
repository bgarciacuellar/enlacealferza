<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
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
        ]);

        $companyCreated = Company::create([
            "name" => $request->name,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
        ]);

        return redirect()->route('company.details', $companyCreated->id)->with('success', 'Creado');
    }

    public function details($id)
    {
        $company = Company::findOrFail($id);
        $companyEmployeesArray = CompanyEmployee::where("company_id", $company->id)->get()->toArray();
        $companyEmployeesMap = function ($companyEmployeeItem) {
            $user = User::where("id", $companyEmployeeItem["user_id"])->first();
            return array(
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
            );
        };
        $companyEmployees = array_map($companyEmployeesMap, $companyEmployeesArray);

        $incidents = Ticket::where("company", $company->id)->orderBy('id', 'DESC')->get();
        return view('company.details', compact('company', 'companyEmployees', 'incidents'));
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
            "role" => 'employee',
            "password" => bcrypt($request->password),
        ]);

        CompanyEmployee::create([
            "user_id" => $employeeCreated->id,
            "company_id" => $company->id,
            "role" => $request->role,
        ]);

        return back()->with('success', '');
    }
}
