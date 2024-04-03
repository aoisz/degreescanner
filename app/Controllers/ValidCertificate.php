<?php

namespace App\Controllers;

class ValidCertificate extends BaseController
{
    public function index(): string
    {
        // require_once(realpath(dirname(__FILE__)."/..")."/Views/template/header/index.php");
        return view('Pages/ValidCertificate/index');
    }
}
