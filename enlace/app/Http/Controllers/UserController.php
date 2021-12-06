<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList(){
        $users = User::all();
        return view('users.users_list', compact('users'));
    }

    public function userDetails($userId){
        $user = User::findOrFail($userId);
        return view('users.users_details', compact('user'));
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
