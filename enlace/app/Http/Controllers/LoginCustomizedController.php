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
            return back()->with('error', 'Lo siento, las credenciales ingresadas son incorrectas. Por favor verifica la información');
        }
        if (Auth::attempt($credentials)) {
            $redirect = $this->checkRole();
            return $redirect;
        }
        return back()->with('error', 'Lo siento, las credenciales ingresadas son incorrectas. Por favor verifica la información');
    }

    public function resetPassword(Request $request)
    {
        $request->validate(
            [
                'password' => 'required',
                'confirm_password' => 'required',
            ],
            [
                'password.required' => 'Es necesaria una contraseña',
                'confirm_password.required' => 'Es necesaria una contraseña',
            ]
        );
        if ($request->password != $request->confirm_password) {
            return back()->with('error', 'Las contraseñas no son iguales');
        }
        $currentUser = Auth::user();
        $currentUser->update([
            'password' => bcrypt($request->password)
        ]);
        
        return back()->with('success', 'La contraseña fue actualizada');
    }
}
