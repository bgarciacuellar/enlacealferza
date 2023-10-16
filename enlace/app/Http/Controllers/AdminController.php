<?php

namespace App\Http\Controllers;

use App\Mail\Announcement;
use App\Mail\NewUserCreated;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyOnCharge;
use App\Models\Ticket;
use App\Traits\helpers;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    use helpers;

    public $usersRoles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];
    public $employeeRoles = ['cliente', 'capturista', 'validador'];

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
    }

    public function dashboard()
    {
        $companies = Company::where('is_active', 1)->count();
        $tickets = Ticket::where('is_archived', 0)->get()->count();
        $usersArray = $this->getAlferzaUsers(true);
        $currentYear = Carbon::now()->format('Y');
        $months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $amountAlferzaUsers = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->count();

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

        return view('admin.dashboard', compact('companies', 'tickets', 'users', 'months', 'amountAlferzaUsers'));
    }

    public function createNewUser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'employee_id' => 'nullable',
                'password' => 'required',
                'role' => 'required',
                'last_name' => 'nullable',
            ],
            [
                'name.required' => 'Es obligatorio  un nombre',
                'email.required' => 'Es obligatorio un correo',
                'email.unique' => 'Correo duplicado',
                'role.required' => 'Es obligatorio un rol',
            ]
        );

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'employee_id' => $request->employee_id,
            'password' => bcrypt($request->password),

        ]);

        AdditionalUserInfo::create(
            [
                'user_id' => $newUser->id,
                'last_name' => $request->last_name,
            ]
        );

        $message = new NewUserCreated($request->name . " " . $request->last_name, $request->email, $request->password, 'Alferza');
        Mail::to($request->email)->send($message);

        return redirect()->route('admin.userDetails', $newUser->id)->with('success', 'Usuario Creado');
    }

    public function updateUserMainInfo(Request $request, $userId)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users,email,' . $userId,
                'role' => 'required',
                'last_name' => 'nullable',
                'employee_id' => 'nullable',
                'work_area' => 'nullable',
                'position' => 'nullable',
                'phone_number' => 'nullable',
                'entry_date' => 'nullable',
                'immediate_boss' => 'nullable',
                'profile_image' => 'nullable',
                'change_password' => 'nullable',
                'password' => $request->change_password ? 'required|min:8' :'nullable',
            ],
            [
                'name.required' => 'Es obligatorio un nombre',
                'email.required' => 'Es obligatorio un correo',
            ]
        );

        $user = User::findOrFail($userId);
        $user->update([
            'name' => $request->name,
            'employee_id' => $request->employee_id,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        if ($request->change_password) {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }

        $userAdditionalInfo = AdditionalUserInfo::where("user_id", $user->id)->first();
        if ($request->hasFile('profile_image')) {
            $profile_image = $this->uploadImage($request->file('profile_image'), 'profile_images');
            if ($userAdditionalInfo) {
                if ($userAdditionalInfo->profile_image) {
                    File::delete('storage/profile_images/' . $userAdditionalInfo->profile_image);
                }
            }
        } else {
            $profile_image = $userAdditionalInfo ? $userAdditionalInfo->profile_image : '';
        }

        AdditionalUserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'last_name' => $request->last_name,
                'work_area' => $request->work_area,
                'position' => $request->position,
                'phone_number' => $request->phone_number,
                'entry_date' => $request->entry_date,
                'immediate_boss' => $request->immediate_boss,
                'profile_image' => $profile_image,
            ]
        );

        return back()->with('success', 'Usuario Actualizado');
    }

    public function updateUserPersonalInfo(Request $request, $userId)
    {
        $request->validate(
            [
                'birthday' => 'nullable',
                'gender' => 'nullable',
                'civil_status' => 'nullable',
            ]
        );

        $user = User::findOrFail($userId);

        AdditionalUserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'birthday' => $request->birthday,
                'gender' => $request->gender,
                'civil_status' => $request->civil_status,
            ]
        );

        return back()->with('success', 'Usuario Actualizado');
    }

    public function updateUserCompanyInfo(Request $request, $userId)
    {
        $request->validate(
            [
                'company' => 'nullable',
                'office' => 'nullable',
                'municipality' => 'nullable',
            ]
        );

        $user = User::findOrFail($userId);

        AdditionalUserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'company' => $request->company,
                'office' => $request->office,
                'municipality' => $request->municipality,
            ]
        );

        return back()->with('success', 'Datos Actualizado');
    }

    public function updateUserEmergencyContact(Request $request, $userId)
    {
        $request->validate(
            [
                'emergency_contact_name' => 'nullable',
                'emergency_contact_phone_number' => 'nullable',

            ]
        );

        $user = User::findOrFail($userId);

        AdditionalUserInfo::updateOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'emergency_contact_name' => $request->emergency_contact_name,
                'emergency_contact_phone_number' => $request->emergency_contact_phone_number,
            ]
        );

        return back()->with('success', 'Contacto Actualizado');
    }

    public function userDetails($userId)
    {
        $user = User::findOrFail($userId);
        $additionalUserInfo = AdditionalUserInfo::where('user_id', $userId)->first();
        $companies = Company::all();
        $bosses = User::where('is_active', 1)->where('id', '!=', $user->id)->whereIn("role", $this->usersRoles)->get();
        $myBoss = User::find($additionalUserInfo->immediate_boss);
        $myBossAdditionalInfo = AdditionalUserInfo::where('user_id', $additionalUserInfo->immediate_boss)->first();
        $additionalUserInfo->boss_name = $myBoss ? $myBoss->name : '-';
        $additionalUserInfo->boss_image = $myBossAdditionalInfo ? $myBossAdditionalInfo->profile_image : false;
        $roles = $this->usersRoles;

        $userCompanies = CompanyOnCharge::where('user_id', $user->id)->get();
        foreach ($userCompanies as $userCompany) {
            $company = Company::find($userCompany->company_id);
            $userCompany->company_name = $company->name;
        }

        return view('admin.users_details', compact('user', 'additionalUserInfo', 'companies', 'userCompanies', 'bosses', 'roles'));
    }

    public function usersList()
    {
        $roles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];

        $usersArray = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->get()->toArray();

        $usersMap = function ($userItem) {
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            return array(
                "id" => $userItem['id'],
                "employee_id" => $userItem['employee_id'],
                "role" => $userItem['role'],
                "name" => $userItem['name'],
                "email" => $userItem['email'],
                "last_name" => $additionalUserInfo->last_name,
                "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
                "work_area" => $additionalUserInfo->work_area,
                "position" => $additionalUserInfo->position,
                "office" => $additionalUserInfo->office,
                "company" => $additionalUserInfo->company,
                "gender" => $additionalUserInfo->gender,
                "birthday" => $additionalUserInfo->birthday,
                "municipality" => $additionalUserInfo->municipality,
                "civil_status" => $additionalUserInfo->civil_status,
                "phone_number" => $additionalUserInfo->phone_number,
                "entry_date" => $additionalUserInfo->entry_date,
                "departure_dates" => $additionalUserInfo->departure_dates,
                "profile_image" => $additionalUserInfo->profile_image,
            );
        };
        $users = array_map($usersMap, $usersArray);

        return view('admin.users_list', compact('users', 'roles'));
    }

    public function usersListGrid()
    {
        $roles = $this->usersRoles;

        $usersArray = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->get()->toArray();

        $usersMap = function ($userItem) {
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            return array(
                "id" => $userItem['id'],
                "employee_id" => $userItem['employee_id'],
                "role" => $userItem['role'],
                "name" => $userItem['name'],
                "email" => $userItem['email'],
                "last_name" => $additionalUserInfo->last_name,
                "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
                "work_area" => $additionalUserInfo->work_area,
                "position" => $additionalUserInfo->position,
                "office" => $additionalUserInfo->office,
                "company" => $additionalUserInfo->company,
                "gender" => $additionalUserInfo->gender,
                "birthday" => $additionalUserInfo->birthday,
                "municipality" => $additionalUserInfo->municipality,
                "civil_status" => $additionalUserInfo->civil_status,
                "phone_number" => $additionalUserInfo->phone_number,
                "entry_date" => $additionalUserInfo->entry_date,
                "departure_dates" => $additionalUserInfo->departure_dates,
                "profile_image" => $additionalUserInfo->profile_image,
            );
        };
        $users = array_map($usersMap, $usersArray);

        return view('admin.users_list_grid', compact('users', 'roles'));
    }

    public function searchUsers(Request $request)
    {

        $roles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];
        $usersArray = $this->searchUser($request);

        $usersMap = function ($userItem) {
            $additionalUserInfo = AdditionalUserInfo::where('user_id', $userItem['id'])->first();
            return array(
                "id" => $userItem['id'],
                "employee_id" => $userItem['employee_id'],
                "role" => $userItem['role'],
                "name" => $userItem['name'],
                "email" => $userItem['email'],
                "last_name" => $additionalUserInfo->last_name,
                "full_name" => $userItem['name'] . ' ' . $additionalUserInfo->last_name,
                "work_area" => $additionalUserInfo->work_area,
                "position" => $additionalUserInfo->position,
                "office" => $additionalUserInfo->office,
                "company" => $additionalUserInfo->company,
                "gender" => $additionalUserInfo->gender,
                "birthday" => $additionalUserInfo->birthday,
                "municipality" => $additionalUserInfo->municipality,
                "civil_status" => $additionalUserInfo->civil_status,
                "phone_number" => $additionalUserInfo->phone_number,
                "entry_date" => $additionalUserInfo->entry_date,
                "departure_dates" => $additionalUserInfo->departure_dates,
                "profile_image" => $additionalUserInfo->profile_image,
            );
        };
        $users = array_map($usersMap, $usersArray);

        return view('admin.users_list', compact('users', 'roles'));
    }

    public function assignToCompany(Request $request, $id)
    {
        $request->validate(
            [
                'company' => 'required',
            ]
        );

        $user = User::where('id', $id)->whereIn("role", $this->usersRoles)->first('id');
        if (!$user) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        }
        $companyOnCharge = CompanyOnCharge::where('user_id', $user->id)->where('company_id', $request->company)->first('id');
        if ($companyOnCharge) {
            return back()->with('error', 'Ya está asignado a esa empresa');
        }

        CompanyOnCharge::create([
            'user_id' => $user->id,
            'company_id' => $request->company,

        ]);

        return back()->with('success', 'Empresa asignada');
    }
    public function unassignCompany($userID, $companyID)
    {
        $user = User::where('id', $userID)->whereIn("role", $this->usersRoles)->first('id');
        if (!$user) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        }

        $companyOnCharge = CompanyOnCharge::where('company_id', $companyID)->where('user_id', $user->id)->first();
        if (!$companyOnCharge) {
            return back()->with('error', 'Ocurrio un error, intentelo de nuevo');
        } else {
            $companyOnCharge->delete();
        }

        return back()->with('success', 'Empresa Desasignada');
    }

    /* announcement */
    public function announcementView()
    {
        return view('admin.announcement');
    }

    public function sendAnnouncement(Request $request)
    {
        $request->validate([
            "announcement" => "required",
            "announcement_type" => "required",
        ]);
        //return $request->announcement;
        $mailRecipients = [];

        if ($request->announcement_type == "alferza") {
            $users = User::where('is_active', 1)->whereIn("role", $this->usersRoles)->get('email');
        }elseif ($request->announcement_type == "customers") {
            $users = User::where('is_active', 1)->whereIn("role", $this->employeeRoles)->get('email');
        }elseif ($request->announcement_type == "all") {
            $allRoles = array_merge($this->usersRoles, $this->employeeRoles);
            $users = User::where('is_active', 1)->whereIn("role", $allRoles)->get('email');
        }

        foreach ($users as $user) {
            $mailRecipients[] = $user->email;
        }
        $message = new Announcement($request->announcement);
        Mail::to($mailRecipients)->send($message);
        
        return back()->with('success', 'Anuncio enviado');
    }


    /* announcement */
}
