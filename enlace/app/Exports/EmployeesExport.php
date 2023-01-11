<?php

namespace App\Exports;

use App\Models\AdditionalUserInfo;
use App\Models\User;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class EmployeesExport implements FromView
{
    public $usersRoles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];

    public function view(): View
    {
        $employeesArray = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->get()->toArray();
        $employeesMap = function ($employeeItem) {
            $addtionalEmployeeInfo = AdditionalUserInfo::where('user_id', $employeeItem['id'])->first();
            
            return array(
                "full_name" => $employeeItem['name'] . $addtionalEmployeeInfo ? $addtionalEmployeeInfo->last_name : "",
                "email" => $employeeItem['email'],
                "role" => $employeeItem['role'],
                "phone_number" => $addtionalEmployeeInfo ? $addtionalEmployeeInfo->phone_number : '-',
            );
        };
        $employees = array_map($employeesMap, $employeesArray);

        return view('exports.employees', [
            'employees' => $employees,
        ]);
    }
}
