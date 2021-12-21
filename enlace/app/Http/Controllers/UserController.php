<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdditionalUserInfo;

class UserController extends Controller
{
    public function userList(){
        $users = User::all();
        return view('users.users_list', compact('users'));
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

    public function disableUser(Request $request){
        $user = User::find($request->user_id);
        if ($user->is_active) {
            $user->update([
                'is_active' => 0
            ]);
        }else {
            return back()->with('error', 'Este usuario ya esta deshabilitado');
        }

        return back()->with('success', 'Usuario deshabilitado');
    }
}
