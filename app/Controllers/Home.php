<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string -- default nya
    public function index()

    {
        // return view('home');

        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('home');
        echo view('layouts/footer');
        echo view ('layouts/foot');

        // susunan home
        // echo view('layouts/header');
        // echo view('layouts/navbar');

        // echo view(layouts/header);
        // echo view(layouts/home);
        // echo view(layouts/footer);
        
    }

        public function about()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('about');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function services()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('services');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function pricing()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('pricing');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function cars()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('cars');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function blog()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('blog');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function contact()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('contact');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }
}
