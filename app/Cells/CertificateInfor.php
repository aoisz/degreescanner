<?php

namespace App\Cells;

class CertificateInfor {
    public function showFullImagePicker(array $data): string
    {
        return view('components/certificate_full/index', ['data' => $data]);
    }
    
    public function showInfor(array $data): string
    {
        return view('components/certificate_infor/index', ['data' => $data]);
    }

    public function showScore(array $data): string
    {
        return view('components/certificate_score/index', ['data' => $data]);
    }
}