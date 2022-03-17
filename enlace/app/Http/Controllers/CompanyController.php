<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function list(){
        $companies = Company::all();
        return view('company.list',compact('companies'));
    }

    public function create(Request $request){
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

    public function details($id){
        $company = Company::findOrFail($id);
        return view('company.details',compact('company'));
    }
}
