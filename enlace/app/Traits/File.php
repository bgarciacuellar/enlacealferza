<?php

namespace App\Traits;

Trait File{
    public function uploadFile($category, $file){
        $path = storage_path('app/public/' . $category);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $completePath = $file->store('public/' . $category);
        $getFileName = explode("/", $completePath);
        $fileName = end($getFileName);
        return $fileName;
    }
}