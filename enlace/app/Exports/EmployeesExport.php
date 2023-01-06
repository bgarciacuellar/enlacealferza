<?php

namespace App\Exports;

use App\Models\User;
use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\PayrollType;
use App\Models\Ticket;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class EmployeesExport implements FromView
{
    public $idInt = 0;

    function __construct(int $test)
    {
        $this->idInt = $test;
    }

    public function view(): View
    {
        $payrollsArray = Ticket::all()->toArray();
        $payrollsMap = function ($payrollItem) {
            $payrollType = PayrollType::where('type', $payrollItem['category'])->first();
            $user = User::where('id', $payrollItem['user_id'])->first();
            
            $company = Company::where('id', $payrollItem['company'])->first();
            if ($company) {
                $companyContacts = CompanyEmployee::where('company_id', $company->id)->get();
                foreach ($companyContacts as $companyContact) {
                    $contact = User::where('id', $companyContact->user_id)->where('role', 'cliente')->first();
                    $contactName = $contact ? $contact->name . " - " . $contact->role : '-';
                }
            }
            return array(
                "payment_period" => $payrollItem['payment_period'],
                "payroll_type" => $payrollType ? $payrollType->type : '-',
                "payroll_name" => $payrollType ? $payrollType->name : '-',
                "user_name" => $user ? $user->name : '-',
                "company_name" => $company ? $company->name . " - " . $company->rfc : '-',
                "company_address" => $company ? $company->address : '-',
                "company_contact" => $company ? $contactName  : '-'
            );
        };
        $payrolls = array_map($payrollsMap, $payrollsArray);

        return view('exports.payrolls', [
            'payrolls' => $payrolls,
        ]);
    }

    /* public function map($invoice): array
    {
        return [
            $array2['id'],
            $array2['name'],
            $array2['email']
        ];
    } */

   /*  public function headings(): array
    {
        return [
            '#',
            'User',
            'email',
        ];
    } */
}
