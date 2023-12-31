<?php

namespace App\Controllers;

class Katalog extends BaseController
{
    public function index()
    {
        $data['showButton'] = true;
        return view('katalog/index', $data);
    }
}
