<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyOnCharge;
use App\Models\PayrollType;
use App\Models\Ticket;
use App\Traits\helpers;
use Carbon\Carbon;

class UserController extends Controller
{
    use helpers;
    
    public $paymentsPeriod = ['semanal', 'quincenal', 'mensual'];

    function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $usersArray = $this->getAlferzaUsers(true);
        $currentYear = Carbon::now()->format('Y');
        $months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        $usersMap = function ($userItem) use ($currentYear, $months){
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            $entryYear = Carbon::parse($additionalUserInfo->entry_date)->format('Y');
            $entryMonth = Carbon::parse($additionalUserInfo->entry_date)->format('m');
            $entryDate = $entryYear < $currentYear ? $currentYear - $entryYear : 0;
            $entryFormatedDate =Carbon::parse($additionalUserInfo->entry_date)->format('d') . " de " . $months[$entryMonth-1];

            $birthdayMonth = Carbon::parse($additionalUserInfo->birthday)->format('m');
            $birthdayFormatedDate = Carbon::parse($additionalUserInfo->birthday)->format('d') . " de " . $months[$birthdayMonth-1];

            return array(
                "id" => $userItem['id'],
                "email" => $userItem['email'],
                "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
                "birthday_formated_date" => $birthdayFormatedDate,
                "birthday" => $additionalUserInfo->birthday,
                "birthday_month" => $birthdayMonth,
                "entry_date" => $additionalUserInfo->entry_date,
                "entry_formated_date" => $entryFormatedDate,
                "entry_date_month" => $entryMonth,
                "anniversary_amount" => $entryDate,
                "profile_image" => $additionalUserInfo->profile_image,
            );
        };
        $users = array_map($usersMap, $usersArray);

        return view('users.dashboard', compact('users', 'months'));
    }

    public function ticketList(Request $request)
    {
        $user = Auth::user();
        $myCompaniesArray = CompanyOnCharge::where("user_id", $user->id)->get()->toArray();
        $selectedCompany = $request->has('company') ? $request->company : 0;
        $paymentsPeriod = $this->paymentsPeriod;

        $myCompaniesMap = function ($myCompanyItem) {
            $company = Company::where('id', $myCompanyItem['company_id'])->first();
            $payrolls = PayrollType::where("company_id", $company->id)->get();
            return array(
                "id" => $company->id,
                "name" => $company->name,
                "payrolls" => $payrolls,
            );
        };
        $myCompanies = array_map($myCompaniesMap, $myCompaniesArray);

        $tickets = Ticket::where("company", $selectedCompany)->orderBy('id', 'DESC')->get();
        foreach ($tickets as $ticket) {
            $ticket->statusString = $this->statusConvert($ticket->status);
        }

        return view('users.ticket.list', compact('myCompanies', 'tickets', 'selectedCompany', 'paymentsPeriod'));
    }

    public function companiesList()
    {
        $user = Auth::user();
        $myCompaniesArray = CompanyOnCharge::where("user_id", $user->id)->get()->toArray();
        $myCompaniesMap = function ($myCompanyItem) {
            $company = Company::where('id', $myCompanyItem['company_id'])->first();
            return array(
                "id" => $company->id,
                "name" => $company->name,
                "logo" => $company->logo,
                "address" => $company->address,
                "phone_number" => $company->phone_number,
            );
        };
        $companies = array_map($myCompaniesMap, $myCompaniesArray);
        
        return view('company.list', compact('companies'));
    }

    public function userDetails()
    {
        $user = User::findOrFail(Auth::user()->id);
        $additionalUserInfo = AdditionalUserInfo::where('user_id', Auth::user()->id)->first();

        $bosses = User::where('is_active', 1)->where('id', '!=', $user->id)->whereIn("role", $this->usersRoles)->get();
        $myBoss = User::find($additionalUserInfo->immediate_boss);
        $myBossAdditionalInfo = AdditionalUserInfo::where('user_id', $additionalUserInfo->immediate_boss)->first();
        $additionalUserInfo->boss_name = $myBoss ? $myBoss->name : '-';
        $additionalUserInfo->boss_image = $myBossAdditionalInfo ? $myBossAdditionalInfo->profile_image : false;

        $myCompanies = CompanyOnCharge::where('user_id', $user->id)->get();
        foreach ($myCompanies as $myCompany) {
            $company = Company::find($myCompany->company_id);
            $myCompany->company_name = $company->name;
        }

        return view('users.users_details', compact('user', 'additionalUserInfo', 'myCompanies'));
    }

    public function updateUser(Request $request, $userId)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email,' . $userId,
                'password' => 'nullable',
                'role' => 'required',
                'is_active' => 'required',
                'last_name' => 'nullable',
                'work_area' => 'nullable',
                'position' => 'nullable',
                'office' => 'nullable',
                'company' => 'nullable',
                'gender' => 'nullable',
                'birthday' => 'nullable',
                'municipality' => 'nullable',
                'civil_status' => 'nullable',
                'phone_number' => 'nullable',
                'entry_date' => 'nullable',
                'departure_dates' => 'nullable',
            ],
            [
                'name.required' => 'Es obligatorio  un nombre',
                'email.required' => 'Es obligatorio un correo',
                'email.unique' => 'Correo duplicado',
                'role.required' => 'Es obligatorio un rol',
            ]
        );

        $user = User::findOrFail($userId);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_active' => $request->is_active,
        ]);
        if ($request->password) {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }
        $userAdditionalInfo = AdditionalUserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'last_name' => $request->last_name,
                'work_area' => $request->work_area,
                'position' => $request->position,
                'office' => $request->office,
                'company' => $request->company,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'municipality' => $request->municipality,
                'civil_status' => $request->civil_status,
                'phone_number' => $request->phone_number,
                'entry_date' => $request->entry_date,
                'departure_dates' => $request->departure_dates,
            ]
        );

        return back()->with('success', 'Usuario Actualizado');
    }

    public function disableUser(Request $request)
    {
        $request->validate([
            "user_id" => "required"
        ]);
        $user = User::find($request->user_id);
        if ($user->is_active) {
            AdditionalUserInfo::where('user_id', $request->user_id)->delete();
            CompanyOnCharge::where('user_id', $request->user_id)->delete();
            $user->delete();
        } else {
            return back()->with('error', 'Este usuario ya esta eliminado');
        }

        return back()->with('success', 'Usuario eliminado');
    }
}
