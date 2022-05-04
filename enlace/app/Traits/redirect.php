<?php

namespace App\Traits;

use Auth;

trait redirect
{
    public function checkRole($user = false)
    {
        if ($user) {
            $currentUser = $user;
        } else {
            $currentUser = Auth::user();
        }

        if ($currentUser->role == 'admin') {
            return redirect()->route('admin.userList');
        } elseif ($currentUser->role == 'operador' || $currentUser->role == 'ejecutivo' || $currentUser->role == 'nominista' || $currentUser->role == 'finanzas' || $currentUser->role == 'pagos' || $currentUser->role == 'cobranza') {
            return redirect()->route('user.ticketList');
        } elseif ($currentUser->role == 'cliente' || $currentUser->role == 'capturista' || $currentUser->role == 'validador') {
            return redirect()->route('employee.tiketsList');
        }
    }
}
