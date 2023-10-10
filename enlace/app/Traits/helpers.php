<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Image;
use Auth;

trait helpers
{
    public $usersRoles = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];
    public $PAYROLL = ['ejecutivo', 'nominista', 'finanzas', 'pagos', 'cobranza'];

    public function uploadCompanyFile($file, $route, $companyId)
    {
        $path = storage_path('app/public/' . $route);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $randomAlphanumeric = bin2hex(random_bytes(2));
        $imageFullName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $imageExtension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $imageName = $imageFullName  . "_" . $companyId . '_' . $randomAlphanumeric . "." . $imageExtension;

        $file->storeAs('public/' . $route, $imageName);
        return $imageName;
    }

    public function searchUser($request)
    {
        if ($request->name) {
            $usersArray = User::where("is_active", 1)->whereIn("role", $this->usersRoles)->where("name", "like", "%" . $request->name . "%")->get()->toArray();
        } elseif ($request->employee_id) {
            $usersArray = User::where("is_active", 1)->whereIn("role", $this->usersRoles)->where("employee_id", "like", "%" . $request->employee_id . "%")->get()->toArray();
        } else {
            $usersArray = User::where("is_active", 1)->whereIn("role", $this->usersRoles)->get()->toArray();
        }
        // where(function ($q) use ($request) {
        //     $q->where("name", "like", "%" . $request->name . "%")->orWhere("employee_id", "like", "%" . $request->employee_id . "%");
        // })
        return $usersArray;
    }

    public function getAlferzaUsers($isArray = false)
    {
        if ($isArray) {
            $usersArray = User::where("is_active", 1)->whereIn("role", $this->usersRoles)->get()->toArray();
        }else {
            $usersArray = User::where("is_active", 1)->whereIn("role", $this->usersRoles)->get();
        }

        return $usersArray;
    }

    public function uploadImage($image, $route)
    {
        $randomName = Str::random(10);
        $imageExtension = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
        $imageName = $randomName . '.' . strtolower($imageExtension);
        $path = storage_path('app/public/' . $route);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $imageRoute = $path . '/' . $imageName;
        Image::make($image->getRealPath())
            ->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($imageRoute, 72);
        return $imageName;
    }

    public function statusConvert($status)
    {
        switch ($status) {
            case 1:
                $statusConverted = "Cargar nóminas";
                break;
            case 2:
                $statusConverted = "Cálculo de nómina";
                break;
            case 2.5:
                $statusConverted = "Observaciones en revisión";
                break;
            case 3:
                $statusConverted = "Autorización";
                break;
            case 4:
                $statusConverted = "Nómina Autorizada";
                break;
            case 4.5:
                $statusConverted = "Observaciones de pre-factura en revisión";
                break;
            case 5:
                $statusConverted = "Autorización de pre-factura";
                break;
            case 6:
                $statusConverted = "-";
                break;
            case 7:
                $statusConverted = "Enviar comprobante";
                break;
            case 8:
                $statusConverted = "Dispersión de nómina solicitada";
                break;
            case 9:
                $statusConverted = "Enviar kardex";
                break;
            case 10:
                $statusConverted = "Nómina completada";
                break;
            default:
                $statusConverted = '-';
                break;
        }
        return $statusConverted;
    }

    public function statusButtons($status)
    {
        switch ($status) {
            case 1:
                $statusConverted = "Enviar nómina";
                break;
            case 2:
                $statusConverted = "Enviar cálculo de nómina";
                break;
            case 2.5:
                $statusConverted = "Enviar cálculo de nómina corregido";
                break;
            case 3:
                $statusConverted = "Autorizar nómina";
                break;
            case 4:
                $statusConverted = "Enviar pre-factura";
                break;
            case 4.5:
                $statusConverted = "Enviar pre-factura corregida";
                break;
            case 5:
                $statusConverted = "Autorizar pre-factura";
                break;
            case 6:
                $statusConverted = "-";
                break;
            case 7:
                $statusConverted = "Enviar comprobante de pago";
                break;
            case 8:
                $statusConverted = "Dispersión en proceso";
                break;
            case 9:
                $statusConverted = "Kardex";
                break;
            case 10:
                $statusConverted = "-";
                break;
            default:
                $statusConverted = 'Siguiente paso';
                break;
        }
        return $statusConverted;
    }

    public function deleteFile($image, $route)
    {
        File::delete('storage/' . $route . '/' . $image);
    }
}
