<?php

namespace App\Http\Controllers;

use App\Models\PayrollType;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function list()
    {
        $payrolls = PayrollType::all();
        return view('payroll.list', compact('payrolls'));
    }

    public function create(Request $request)
    {
        $request->validate([
            "type" => "required",
            "name" => "required",
        ]);

        PayrollType::create([
            "type" => $request->type,
            "name" => $request->name,
        ]);

        return back()->with('success', 'Creado');
    }

    public function details($id)
    {
        $payroll = PayrollType::findOrFail($id);

        return view('payroll.details', compact('payroll'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "type" => "required",
            "name" => "required",
        ]);

        $payroll = PayrollType::findOrFail($id);

        $payroll->update([
            "type" => $request->type,
            "name" => $request->name,
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
