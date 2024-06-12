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

    public function showEmpty(): string
    {
        return view("components/certificate_list/emptylist");
    }
    public function showAllList($data): string
    {
        return view("components/certificate_list/indexadmin", ['data' => $data]);
    }
    public function showRowAdmin($item): string
    {
        return view("components/certificate_list/certificaterowadmin", $item);
    }
    public function showEmptyAdmin(): string
    {
        return view("components/certificate_list/emptylistadmin");
    }
}