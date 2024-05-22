<?php

namespace App\Cells;

class CertificateInfor {
    public function showFullImagePicker(array $params): string
    {
        return view('components/certificate_full/index', ['data' => $params["data"], 'imagePath' => $params["imagePath"]]);
    }
    
    public function showInfor(array $params): string
    {
        return view('components/certificate_infor/index', ['data' => $params["data"], 'imagePath' => $params["imagePath"]]);
    }

    public function showScore(array $params): string
    {
        return view('components/certificate_score/index', ['data' => $params["data"], 'imagePath' => $params["imagePath"]]);
    }
}