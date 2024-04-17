<?php

namespace App\Cells;

class CertificateRow
{
    public function showList($data): string
    {
        return view("components/certificate_list/index", ['data' => $data]);
    }

    public function showRow($item): string
    {
        
        return view("components/certificate_list/certificaterow", $item);
    }
}