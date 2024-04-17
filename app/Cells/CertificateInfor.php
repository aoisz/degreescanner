<?php

namespace App\Cells;

class CertificateInfor {
    public function showForm(array $params): string
    {
        return view('components/certificate_infor/index', ['data' => $params["data"]]);
    }
}