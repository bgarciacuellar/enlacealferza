<?php

namespace Database\Seeders;

use App\Models\AdditionalUserInfo;
use App\Models\Company;
use App\Models\CompanyEmployee;
use App\Models\CompanyOnCharge;
use App\Models\PayrollType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AllDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Company::truncate();
        PayrollType::truncate();
        AdditionalUserInfo::truncate();

        $admin = User::create([
            "name" => "Admin",
            "email" => "socialmedia@alferza.mx",
            "password" => bcrypt("Social%media"),
            "role" => "admin"
        ]);

        AdditionalUserInfo::create([
            "user_id" => $admin->id,
            "last_name" => "Admin"
        ]);

        $companiesJson = Storage::disk('local')->get("public/data/companies.json");
        $companies = json_decode($companiesJson);
        foreach ($companies as $company) {
            Company::create([
                "name" => $company->nombre_cliente,
            ]);
        }

        $payrollsJson = Storage::disk('local')->get("public/data/payrolls.json");
        $payrolls = json_decode($payrollsJson);
        foreach ($payrolls as $payroll) {
            PayrollType::create([
                "type" => $payroll->tipo_nominas,
                "name" => $payroll->nombre_nomina,
            ]);
        }

        $usersJson = Storage::disk('local')->get("public/data/final_users.json");
        $users = json_decode($usersJson);

        foreach ($users as $user) {
            $userExist = User::where('email', $user->email)->first();
            if (!$userExist) {
                $shortenName = substr($user->name, 0, 4);
                $password = strtolower($shortenName) . "2022%";
                $newUser = User::create([
                    "name" => $user->name,
                    "email" => $user->email,
                    "password" => bcrypt($password),
                    "role" => "ejecutivo"
                ]);
                AdditionalUserInfo::create([
                    "user_id" => $newUser->id,
                    "last_name" => $user->lastname
                ]);
                if ($newUser->email == "ejecutivo2@alferza.com.mx") {
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 1,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 4,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 7,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 8,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 10,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 11,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 13,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 15,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 17,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 18,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 19,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 23,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 26,
                    ]);
                } elseif ($newUser->email == "calidad@alferza.mx") {
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 3,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 9,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 14,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 16,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 20,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 24,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 25,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 29,
                    ]);
                } elseif ($newUser->email == "ejecutivo3@alferza.com.mx") {
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 5,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 6,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 12,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 21,
                    ]);
                } elseif ($newUser->email == "ejecutivo4@alferza.com.mx") {
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 22,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 27,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 28,
                    ]);
                    CompanyOnCharge::create([
                        "user_id" => $newUser->id,
                        "company_id" => 30,
                    ]);
                }
            }
        }

        $validatorsJson = Storage::disk('local')->get("public/data/validadores.json");
        $validators = json_decode($validatorsJson);

        foreach ($validators as $validator) {
            $validatorExist = User::where('email', $validator->email)->first();
            if (!$validatorExist) {
                $shortenName = substr($validator->nombre, 0, 4);
                $password = strtolower($shortenName) . "2022%";
                $newValidator = User::create([
                    "name" => $validator->nombre,
                    "email" => $validator->email,
                    "password" => bcrypt($password),
                    "role" => "validador"
                ]);
                switch ($newValidator->email) {
                    case 'administracion@lahabichuelamagica.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 20,
                        ]);
                        break;
                    case 'aldo@aleate.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 9,
                        ]);
                        break;
                    case 'brisa.backen@gmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 26,
                        ]);
                        break;
                    case 'c.alatorre@strongrhino.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 28,
                        ]);
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 30,
                        ]);
                        break;
                    case 'carlos@treembo.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 24,
                        ]);
                        break;
                    case 'contabilidad@ekia.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 4,
                        ]);
                        break;
                    case 'contabilidad2@alferza.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 21,
                        ]);
                        break;
                    case 'hector@neidex.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 6,
                        ]);
                        break;
                    case 'contador@murakami.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 10,
                        ]);
                        break;
                    case 'contador@brima.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 27,
                        ]);
                        break;
                    case 'jaz@alzu.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 11,
                        ]);
                        break;
                    case 'ebaron@pixelwindow.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 22,
                        ]);
                        break;
                    case 'iqlandero@gmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 29,
                        ]);
                        break;
                    case 'kenji@vitalbotanics.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 8,
                        ]);
                        break;
                    case 'macevedo@limver.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 13,
                        ]);
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 23,
                        ]);
                        break;
                    case 'lcamarenar@isi.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 18,
                        ]);
                        break;
                    case 'misael@garantia.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 2,
                        ]);
                        break;
                    case 'naciones.unidas@hotmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 5,
                        ]);
                        break;
                    case 'mavila@tiendasduxy.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 17,
                        ]);
                        break;
                    case 'maryl@actioncoach.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 19,
                        ]);
                        break;
                    case 'pmorales@sistemasdelimpieza.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 14,
                        ]);
                        break;
                    case 'pablo@zubut.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 15,
                        ]);
                        break;
                    case 'rh@glassisimo.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 16,
                        ]);
                        break;
                    case 'recursoshumanos@unipackmexico.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 25,
                        ]);
                        break;
                    case 'ventas@urbafix.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 1,
                        ]);
                        break;
                    case 'vgiro@ayudatelta.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 3,
                        ]);
                        break;
                    case 'tesoreria@ayudatelta.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 3,
                        ]);
                        break;
                    case 'ricardo.garcia@taste-mkt.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 7,
                        ]);
                        break;
                    case 'stanzaestela@hotmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newValidator->id,
                            "company_id" => 12,
                        ]);
                        break;

                    default:
                        break;
                }
            }
        }

        $capturistasJson = Storage::disk('local')->get("public/data/capturistas.json");
        $capturistas = json_decode($capturistasJson);

        foreach ($capturistas as $capturista) {
            $capturistaExist = User::where('email', $capturista->email)->first();
            if (!$capturistaExist) {
                $shortenName = substr($capturista->name, 0, 4);
                $password = strtolower($shortenName) . "2022%";
                $newCapturista = User::create([
                    "name" => $capturista->name,
                    "email" => $capturista->email,
                    "password" => bcrypt($password),
                    "role" => "capturista"
                ]);

                switch ($newCapturista->email) {
                    case 'administracion@lahabichuelamagica.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 20,
                        ]);
                        break;
                    case 'aldo@aleate.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 9,
                        ]);
                        break;
                    case 'brisa.backen@gmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 26,
                        ]);
                        break;
                    case 'c.alatorre@strongrhino.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 28,
                        ]);
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 30,
                        ]);
                        break;
                    case 'carlos@treembo.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 24,
                        ]);
                        break;
                    case 'contabilidad@ekia.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 4,
                        ]);
                        break;
                    case 'contabilidad2@alferza.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 21,
                        ]);
                        break;
                    case 'hector@neidex.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 6,
                        ]);
                        break;
                    case 'contador@murakami.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 10,
                        ]);
                        break;
                    case 'contador@brima.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 27,
                        ]);
                        break;
                    case 'jaz@alzu.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 11,
                        ]);
                        break;
                    case 'iolvera@pixelwindow.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 22,
                        ]);
                        break;
                    case 'iqlandero@gmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 29,
                        ]);
                        break;
                    case 'kenji@vitalbotanics.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 8,
                        ]);
                        break;
                    case 'macevedo@limver.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 13,
                        ]);
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 23,
                        ]);
                        break;
                    case 'lcamarenar@isi.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 18,
                        ]);
                        break;
                    case 'misael@garantia.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 2,
                        ]);
                        break;
                    case 'naciones.unidas@hotmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 5,
                        ]);
                        break;
                    case 'mavila@tiendasduxy.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 17,
                        ]);
                        break;
                    case 'maryl@actioncoach.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 19,
                        ]);
                        break;
                    case 'pmorales@sistemasdelimpieza.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 14,
                        ]);
                        break;
                    case 'pablo@zubut.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 15,
                        ]);
                        break;
                    case 'rh@glassisimo.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 16,
                        ]);
                        break;
                    case 'recursoshumanos@unipackmexico.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 25,
                        ]);
                        break;
                    case 'ventas@urbafix.com.mx':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 1,
                        ]);
                        break;
                    case 'vgiro@ayudatelta.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 3,
                        ]);
                        break;
                    case 'tesoreria@ayudatelta.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 3,
                        ]);
                        break;
                    case 'ricardo.garcia@taste-mkt.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 7,
                        ]);
                        break;
                    case 'stanzaestela@hotmail.com':
                        CompanyEmployee::create([
                            "user_id" => $newCapturista->id,
                            "company_id" => 12,
                        ]);
                        break;

                    default:
                        break;
                }
            } else {
                $capturistaExist->update([
                    "role" => "cliente"
                ]);
            }
        }
    }
}
