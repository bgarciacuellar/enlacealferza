<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PayrollType;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function list()
    {
        $payrolls = PayrollType::all();
        $companies = Company::orderBy("name", "asc")->get();
        foreach ($payrolls as $payroll) {
            $payrollCompany = Company::where("id", $payroll->company_id)->first('name');
            $payroll->company_name = $payrollCompany ? $payrollCompany->name : "-";
        }
        return view('payroll.list', compact('payrolls', 'companies'));
    }

    public function create(Request $request)
    {
        $request->validate([
            "type" => "required",
            "name" => "required",
            "company" => "required",
        ]);

        PayrollType::create([
            "type" => $request->type,
            "name" => $request->name,
            "company_id" => $request->company,
        ]);

        return back()->with('success', 'Creado');
    }

    public function details($id)
    {
        $companies = Company::orderBy("name", "asc")->get();
        $payroll = PayrollType::findOrFail($id);
        $payrollCompany = Company::where("id", $payroll->company_id)->first('name');
        $payroll->company_name = $payrollCompany ? $payrollCompany->name : "-";

        return view('payroll.details', compact('payroll', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "type" => "required",
            "name" => "required",
            "company" => "required",
        ]);

        $payroll = PayrollType::findOrFail($id);

        $payroll->update([
            "type" => $request->type,
            "name" => $request->name,
            "company_id" => $request->company,
        ]);

        return back()->with('success', 'Actualizado');
    }

    public function delete(Request $request)
    {
        $request->validate([
            "payroll" => "required"
        ]);

        $payroll = PayrollType::findOrFail($request->payroll);

        $payroll->delete();

        return back()->with('success', 'Eliminado');
    }
}
