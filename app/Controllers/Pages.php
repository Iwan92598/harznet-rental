<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('home2');
        // echo 'hello world';

        // echo view(layouts/header);
        // echo view(layouts/home);
        // echo view(layouts/footer);
    }
}
