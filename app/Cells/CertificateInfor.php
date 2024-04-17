<?php

namespace App\Cells;

class CertificateInfor {
    public function showForm(string $data): string
    {
        return view('components/certificate_infor/index', ['data' => $data]);
    }
}