<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LoginCustomizedController extends Controller
{
    public function loginView()
    {
        return view('auth.login_customized');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Es necesario un correo',
                'password.required' => 'Es necesaria una contraseña',
            ]
        );
        $user = User::where('email', $request->email)->first();
        $isActive = $user ? $user->is_active : 0;
        if (!$isActive) {
            return back()->with('error', 'Credenciales Erroneas, Verifiquie la Información');
        }
        if (Auth::attempt($credentials)) {
            if ($user->role == 'admin') {
                return redirect()->route('admin.userList');
            }else if($user->role == 'operador'){
                return redirect()->route('user.userDetails');
            }
        }
        return back()->with('error', 'Credenciales Erroneas, Verifiquie la Información');
    }
}
