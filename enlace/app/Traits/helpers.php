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


    public function searchUser($request)
    {

        $usersArray = User::where("is_active", 1)->whereIn("role", $this->usersRoles)->where("name", "like", "%" . $request->name . "%")->where("employee_id", "like", "%" . $request->employee_id . "%")->get()->toArray();
        // where(function ($q) use ($request) {
        //     $q->where("name", "like", "%" . $request->name . "%")->orWhere("employee_id", "like", "%" . $request->employee_id . "%");
        // })
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
                $statusConverted = "Cargar incidencia";
                break;
            case 2:
                $statusConverted = "Calculo de nómina";
                break;
            case 3:
                $statusConverted = "Autorización";
                break;
            case 4:
                $statusConverted = "Nómina Autorizada";
                break;
            case 5:
                $statusConverted = "Pagada";
                break;
            default:
                $statusConverted = '-';
                break;
        }
        return $statusConverted;
    }

    public function deleteFile($image, $route)
    {
        File::delete('storage/' . $route . '/' . $image);
    }
}
