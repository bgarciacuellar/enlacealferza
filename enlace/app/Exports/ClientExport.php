<?php

namespace App\Exports;

use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\User;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class ClientExport implements FromView
{
    public $usersRoles = ['cliente', 'capturista', 'validador'];

    public function view(): View
    {
        $clientsArray = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->get()->toArray();
        $clientsMap = function ($clientItem) {
            $companyEmployee = CompanyEmployee::where('user_id', $clientItem['id'])->first();
            $company = Company::where('id', $companyEmployee->company_id)->first();
            
            return array(
                "name" => $clientItem['name'],
                "email" => $clientItem['email'],
                "role" => $clientItem['role'],
                "company" => $company ? $company->name . " / " . $company->business_name: '-',
            );
        };
        $clients = array_map($clientsMap, $clientsArray);

        return view('exports.clients', [
            'clients' => $clients,
        ]);
    }
}
