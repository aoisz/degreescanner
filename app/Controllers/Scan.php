<?php

namespace App\Controllers;

class Scan extends BaseController
{
    public function index(): string
    {
        // require_once(realpath(dirname(__FILE__)."/..")."/Views/template/header/index.php");
        return view('Pages/Scan/index');
    }
}
