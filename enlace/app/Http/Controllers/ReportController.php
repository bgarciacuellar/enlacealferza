<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public $usersRoles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
    }

    public function backupsView()
    {
        
        $companies = Company::orderBy("name", "asc")->get(["id", "name"]);
        
        return view('reports.backups', compact('companies'));
    }

    public function exportPayrolls() 
    {
        return Excel::download(new EmployeesExport(159), 'users.xlsx');
    }
}
