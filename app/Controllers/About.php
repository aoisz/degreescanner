<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('Pages/About/index');
    }
}


