<?php

namespace App\Http\Controllers;

/* use App\Models\Incident; */
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function list(){
        /* $incidents = Incident::all(); */

        return view('incidents.list');
    }

    public function details(){
        /* $incidents = Incident::all(); */

        return view('incidents.details');
    }
}
