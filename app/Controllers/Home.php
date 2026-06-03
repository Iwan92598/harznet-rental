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
        return view('home',$data);    
    }

        public function about()
    {
        $data = [
            'title' => 'About | Harznet Rental',
        ];
        return view('about',$data);
    }

    public function services()
    {
        $data = [
            'title' => 'Services | Harznet Rental',
        ];
        return view('services',$data);
    }

    public function pricing()
    {
        $data = [
            'title' => 'Pricing | Harznet Rental',
        ];
        return view('pricing',$data);
    }

    public function cars()

    /*
    Data Mobil
    public function detailMobil($id)
{
    $mobil = [
        1 => [
            'id' => 1,
            'nama' => 'Honda Brio Merah',
            'merek' => 'Honda',
            'harga' => 500,
            'gambar' => 'car-1.png',
            'transmisi' => 'Manual',
            'seat' => '5 Adults',
            'fuel' => 'Petrol',
            'luggage' => '4 Bags',
            'mileage' => '40.000'
        ],
        2 => [
            'id' => 2,
            'nama' => 'Toyota Avanza',
            'merek' => 'Toyota',
            'harga' => 600,
            'gambar' => 'car-2.png',
            'transmisi' => 'Automatic',
            'seat' => '7 Adults',
            'fuel' => 'Petrol',
            'luggage' => '5 Bags',
            'mileage' => '25.000'
        ]
    ];

    $data = [
        'title' => 'Detail Mobil',
        'mobil' => $mobil[$id]
    ];

    return view('car-single', $data);
}

    */

    {
        $data = [
            'title' => 'Cars | Harznet Rental',
            'mobil' => [
                [
                    'id' => 1,
                    'nama' => 'Honda Brio Merah',
                    'merek' => 'Honda',
                    'harga' => 500,
                    'gambar' => 'car-1.png'
                ],
                [
                    'id' => 2,
                    'nama' => 'Toyota Avanza',
                    'merek' => 'Toyota',
                    'harga' => 600,
                    'gambar' => 'car-2.jpg'
                ],
                [
                    'id' => 3,
                    'nama' => 'Daihatsu Xenia',
                    'merek' => 'Daihatsu',
                    'harga' => 550,
                    'gambar' => 'car-3.png'
                ]
            ]
        ];

        return view('cars', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog | Harznet Rental',
        ];
        return view('blog',$data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Harznet Rental',
        ];
        return view('contact',$data);
    }
}
