<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    public function index()

    {
        // return view('home');

        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('home');
        echo view('layouts/footer');
        echo view ('layouts/foot');


        // echo view(layouts/header);
        // echo view(layouts/home);
        // echo view(layouts/footer);
        
    }
}
