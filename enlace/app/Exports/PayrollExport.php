<?php

namespace App\Exports;

use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\PayrollType;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class PayrollExport implements FromView
{
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
}
