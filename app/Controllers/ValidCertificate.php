<?php

namespace App\Controllers;

class ValidCertificate extends BaseController
{
    public function index(): string
    {
        return view('Pages/ValidCertificate/index');
    }
}
