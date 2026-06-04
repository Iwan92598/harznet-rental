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
            'mobil' => $this->mobil
        ];
        return view('home',$data);    
    }

        public function about()
    {
        $data = [
        'title' => 'About | Harznet Rental',
        'page' => 'Tentang Kami',
        'titlePage' => 'Tentang Kami',
        'bg' => 'bg_3.jpg'
    ];
        return view('about',$data);
    }

    public function services()
    {
    $data = [
        'title' => 'Services | Harznet Rental',
        'page' => 'Layanan',
        'titlePage' => 'Layanan Kami',
        'bg' => 'bg_3.jpg'
    ];
        return view('services',$data);
    }

    public function pricing()
    {
        $data = [
        'title' => 'Harga | Harznet Rental',
        'page' => 'Harga',
        'titlePage' => 'Harga Layanan',
        'bg' => 'bg_3.jpg'
    ];
        return view('pricing',$data);
    }
    private $mobil = [
        [
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
        [
            'id' => 2,
            'nama' => 'Toyota Avanza',
            'merek' => 'Toyota',
            'harga' => 600,
            'gambar' => 'car-2.jpg',
            'transmisi' => 'Automatic',
            'seat' => '7 Adults',
            'fuel' => 'Petrol',
            'luggage' => '5 Bags',
            'mileage' => '25.000'
        ],
        [
            'id' => 3,
            'nama' => 'Daihatsu Xenia',
            'merek' => 'Daihatsu',
            'harga' => 550,
            'gambar' => 'car-3.png',
            'transmisi' => 'Manual',
            'seat' => '7 Adults',
            'fuel' => 'Petrol',
            'luggage' => '5 Bags',
            'mileage' => '30.000'
        ]
    ];

    public function cars()
    {
        $data = [
            'title' => 'Cars | Harznet Rental',
            'page' => 'Mobil',
            'titlePage' => 'Pilih Mobil Anda',
            'bg' => 'bg_3.jpg',
            'mobil' => $this->mobil
        ];

        return view('cars', $data);
    }

    public function detail($id)
    {
        $detail = null;

        foreach ($this->mobil as $m) {
            if ($m['id'] == $id) {
                $detail = $m;
                break;
            }
        }

        if (!$detail) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $detail['nama'],
            'mobil' => $detail,      // mobil yang sedang dibuka
            'mobils' => $this->mobil // semua mobil untuk rekomendasi
        ];

        

        return view('car-single', $data);
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
            'page' => 'Kontak',
            'titlePage' => 'Hubungi Kami',
            'bg' => 'bg_3.jpg'
        ];
        return view('contact',$data);
    }

        public function login()
    {
        $data = [
            'title' => 'Login | Harznet Rental',
        ];
        return view('login',$data);
    }
}
