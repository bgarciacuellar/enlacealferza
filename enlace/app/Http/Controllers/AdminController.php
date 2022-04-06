<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyOnCharge;

class AdminController extends Controller
{
    public function createNewUser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'employee_id' => 'nullable',
                'password' => 'nullable',
                'role' => 'required',
                'last_name' => 'nullable',
                // 'work_area' => 'nullable',
                // 'position' => 'nullable',
                // 'office' => 'nullable',
                // 'company' => 'nullable',
                // 'gender' => 'nullable',
                // 'birthday' => 'nullable',
                // 'municipality' => 'nullable',
                // 'civil_status' => 'nullable',
                // 'phone_number' => 'nullable',
                // 'entry_date' => 'nullable',
                // 'departure_dates' => 'nullable',
            ],
            [
                'name.required' => 'Es obligatorio  un nombre',
                'email.required' => 'Es obligatorio un correo',
                'email.unique' => 'Correo duplicado',
                'role.required' => 'Es obligatorio un rol',
            ]
        );

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),

        ]);
        AdditionalUserInfo::create(
            [
                'user_id' => $newUser->id,
                'last_name' => $request->last_name,
                // 'work_area' => $request->work_area,
                // 'position' => $request->position,
                // 'office' => $request->office,
                // 'company' => $request->company,
                // 'gender' => $request->gender,
                // 'birthday' => $request->birthday,
                // 'municipality' => $request->municipality,
                // 'civil_status' => $request->civil_status,
                // 'phone_number' => $request->phone_number,
                // 'entry_date' => $request->entry_date,
                // 'departure_dates' => $request->departure_dates,
            ]
        );

        return redirect()->route('admin.userDetails', $newUser->id)->with('success', 'Usuario Creado');
    }

    public function updateUser(Request $request, $userId)
    {
        $request->validate(
            [
                'name' => 'required',
                /* 'email' => 'required|unique:users,email,' . $userId, */
                'last_name' => 'nullable',
                'work_area' => 'nullable',
                'position' => 'nullable',
                'office' => 'nullable',
                'company' => 'nullable',
                'gender' => 'nullable',
                'birthday' => 'nullable',
                'municipality' => 'nullable',
                'civil_status' => 'nullable',
                'phone_number' => 'nullable',
                'entry_date' => 'nullable',
                'departure_dates' => 'nullable',
            ],
            [
                'name.required' => 'Es obligatorio  un nombre',
                // 'email.required' => 'Es obligatorio un correo',
                // 'email.unique' => 'Correo duplicado',
            ]
        );

        $user = User::findOrFail($userId);
        $user->update([
            'name' => $request->name,
        ]);

        $userAdditionalInfo = AdditionalUserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'last_name' => $request->last_name,
                'work_area' => $request->work_area,
                'position' => $request->position,
                'office' => $request->office,
                'company' => $request->company,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'municipality' => $request->municipality,
                'civil_status' => $request->civil_status,
                'phone_number' => $request->phone_number,
                'entry_date' => $request->entry_date,
                'departure_dates' => $request->departure_dates,
            ]
        );

        return back()->with('success', 'Usuario Actualizado');
    }

    public function userDetails($userId)
    {
        $user = User::findOrFail($userId);
        $additionalUserInfo = AdditionalUserInfo::where('user_id', $userId)->first();
        $companies = Company::all();

        $userCompanies = CompanyOnCharge::where('user_id', $user->id)->get();
        foreach ($userCompanies as $userCompany) {
            $company = Company::find($userCompany->company_id);
            $userCompany->company_name = $company->name;
        }

        return view('admin.users_details', compact('user', 'additionalUserInfo', 'companies', 'userCompanies'));
    }

    public function usersList()
    {
        $usersArray = User::where('role', 'operador')->get()->toArray();

        $usersMap = function ($userItem) {
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            return array(
                "id" => $userItem['id'],
                "employee_id" => $userItem['employee_id'],
                "role" => $userItem['role'],
                "name" => $userItem['name'],
                "email" => $userItem['email'],
                "last_name" => $additionalUserInfo->last_name,
                "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
                "work_area" => $additionalUserInfo->work_area,
                "position" => $additionalUserInfo->position,
                "office" => $additionalUserInfo->office,
                "company" => $additionalUserInfo->company,
                "gender" => $additionalUserInfo->gender,
                "birthday" => $additionalUserInfo->birthday,
                "municipality" => $additionalUserInfo->municipality,
                "civil_status" => $additionalUserInfo->civil_status,
                "phone_number" => $additionalUserInfo->phone_number,
                "entry_date" => $additionalUserInfo->entry_date,
                "departure_dates" => $additionalUserInfo->departure_dates,
            );
        };
        $users = array_map($usersMap, $usersArray);

        return view('admin.users_list', compact('users'));
    }

    public function searchUsers(Request $request)
    {

        $usersArray = User::where("name", "like", "%" . $request->name . "%")->orWhere("employee_id", "like", "%" . $request->employee_id . "%")->get()->toArray();

        $usersMap = function ($userItem) {
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            return array(
                "id" => $userItem['id'],
                "employee_id" => $userItem['employee_id'],
                "role" => $userItem['role'],
                "name" => $userItem['name'],
                "email" => $userItem['email'],
                "last_name" => $additionalUserInfo->last_name,
                "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
                "work_area" => $additionalUserInfo->work_area,
                "position" => $additionalUserInfo->position,
                "office" => $additionalUserInfo->office,
                "company" => $additionalUserInfo->company,
                "gender" => $additionalUserInfo->gender,
                "birthday" => $additionalUserInfo->birthday,
                "municipality" => $additionalUserInfo->municipality,
                "civil_status" => $additionalUserInfo->civil_status,
                "phone_number" => $additionalUserInfo->phone_number,
                "entry_date" => $additionalUserInfo->entry_date,
                "departure_dates" => $additionalUserInfo->departure_dates,
            );
        };
        $users = array_map($usersMap, $usersArray);

        return view('admin.users_list', compact('users'));
    }

    public function assignToCompany(Request $request, $id)
    {
        $request->validate(
            [
                'company' => 'required',
            ]
        );

        $user = User::where('id', $id)->where('role', 'operador')->first('id');
        if (!$user) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        }
        $companyOnCharge = CompanyOnCharge::where('user_id', $user->id)->where('company_id', $request->company)->first('id');
        if ($companyOnCharge) {
            return back()->with('error', 'Ya está asignado a esa empresa');
        }

        CompanyOnCharge::create([
            'user_id' => $user->id,
            'company_id' => $request->company,

        ]);

        return back()->with('success', 'Empresa asignada');
    }
    public function unassignCompany($userID, $companyID)
    {
        $user = User::where('id', $userID)->where('role', 'operador')->first('id');
        if (!$user) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        }

        $companyOnCharge = CompanyOnCharge::where('company_id', $companyID)->where('user_id', $user->id)->first();
        if (!$companyOnCharge) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        } else {
            $companyOnCharge->delete();
        }

        return back()->with('success', 'Empresa Desasignada');
    }
}
