<?php

namespace App\Http\Controllers;

use App\Exports\ClientExport;
use App\Models\Company;
use App\Exports\EmployeesExport;
use App\Exports\PayrollExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public $today = "";

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
        $this->today = Carbon::now()->format('d_m_Y');
    }

    public function backupsView()
    {
        
        $companies = Company::orderBy("name", "asc")->get(["id", "name"]);
        
        return view('reports.backups', compact('companies'));
    }

    public function exportReports(Request $request) 
    {
        $request->validate([
            "report_type" => "required"
        ]);

        if ($request->report_type == "payroll") {
            return Excel::download(new PayrollExport(), 'nomina_'. $this->today .'.xlsx');
        }elseif ($request->report_type == "employees") {
            return Excel::download(new EmployeesExport(), 'empleados_'. $this->today .'.xlsx');
        }elseif ($request->report_type == "clients") {
            return Excel::download(new ClientExport(), 'clientes_'. $this->today .'.xlsx');
        }

    }
}
