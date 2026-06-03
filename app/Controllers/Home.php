<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string -- default nya
    public function index()

    {
        // return view('home');
        $data = [
            'title' => 'Home | Harznet Rental',
        ];

        echo view('layouts/header', $data);
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
        $data = [
            'title' => 'About | Harznet Rental',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('about');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function services()
    {
        $data = [
            'title' => 'Services | Harznet Rental',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar',);
        echo view('services',);
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function pricing()
    {
        $data = [
            'title' => 'Pricing | Harznet Rental',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('pricing');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function cars()
    {
        $data = [
            'title' => 'Cars | Harznet Rental',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('cars');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog | Harznet Rental',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('blog');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Harznet Rental',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('contact');
        echo view('layouts/footer');
        echo view ('layouts/foot');
    }
}
