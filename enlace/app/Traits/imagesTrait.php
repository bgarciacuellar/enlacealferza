<?php

namespace App\Traits;

use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;

trait imagesTrait
{
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

    public function delete($image, $route)
    {
        File::delete('storage/' . $route . '/' . $image);
    }
}
