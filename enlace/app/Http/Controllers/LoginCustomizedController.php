<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\redirect;
use Auth;
use Illuminate\Http\Request;

class LoginCustomizedController extends Controller
{
    use redirect;
    public function loginView()
    {
        $currentUser = Auth::user();
        if (!$currentUser) {
            return view('auth.login_customized');
        }
        $redirect = $this->checkRole();
        return $redirect;
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
            $redirect = $this->checkRole();
            return $redirect;
        }
        return back()->with('error', 'Credenciales Erroneas, Verifiquie la Información');
    }
}
