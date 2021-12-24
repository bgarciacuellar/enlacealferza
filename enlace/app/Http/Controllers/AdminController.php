<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdditionalUserInfo;

class AdminController extends Controller
{
    public function createNewUser(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'nullable',
                'role' => 'required',
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

        return redirect()->route('users.userList')->with('success', 'Usuario Creado');
    }

    public function updateUser(Request $request, $userId){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email,' . $userId,
                'password' => 'nullable',
                'role' => 'required',
                'is_active' => 'required',
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
                'email.required' => 'Es obligatorio un correo',
                'email.unique' => 'Correo duplicado',
                'role.required' => 'Es obligatorio un rol',
            ]
        );

        $user = User::findOrFail($userId);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_active' => $request->is_active,
        ]);
        if ($request->password) {
            $user->update([
                'password' => bcrypt($request->password),
            ]); 
        }
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

    public function userDetails($userId){
        $user = User::findOrFail($userId);
        $additionalUserInfo = AdditionalUserInfo::where('user_id', $userId)->first();

        return view('users.users_details', compact('user', 'additionalUserInfo'));
    }
    public function userList(){
        $userArray = User::where('id', $userId)->get()->toArray();

        $userMap = function ($userItem) {
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            return array(
                "id" => $userItem['id'],
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
        $user = array_map($userMap, $userArray);

        return view('users.users_details', compact('user'));
    }
}
