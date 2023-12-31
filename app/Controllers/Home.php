<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layout/template', $this->data);
    }
    public function register()
    {
        return view('signup', $this->data);
    }
}
