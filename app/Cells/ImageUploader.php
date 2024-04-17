<?php

namespace App\Cells;

class ImageUploader {
    public function show(array $params): string 
    {
        return view("components/image_uploader/index", ['imagePath' => $params["imagePath"]]);
    }
}