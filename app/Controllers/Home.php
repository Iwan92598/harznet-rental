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
        'bg' => 'bg_3.jpg',
        'mobil' => $this->mobil
    ];
        return view('pricing',$data);
    }
    private $mobil = [
        [
            'id' => 1,
            'nama' => 'Honda Brio Merah 2026',
            'merek' => 'Honda',
            'harga_per_jam' => 35000,
            'harga_per_hari' => 350000,
            'harga_per_minggu' => 0,
            'gambar' => 'car-1.png',
            'transmisi' => 'Automatic',
            'seat' => '5 Adults',
            'fuel' => 'Bensin',
            'luggage' => '4 Bags',
            'mileage' => '40.000'
        ],
        [
            'id' => 2,
            'nama' => 'Honda BR-V Hitam 2025',
            'merek' => 'Honda',
            'harga_per_jam' => 40000,
            'harga_per_hari' => 400000,
            'harga_per_minggu' => 0,
            'gambar' => 'car-2.jpg',
            'transmisi' => 'Manual',
            'seat' => '7 Adults',
            'fuel' => 'Bensin',
            'luggage' => '5 Bags',
            'mileage' => '30.000'
        ],
        [
            'id' => 3,
            'nama' => 'Toyota Innova Reborn Putih 2026',
            'merek' => 'Toyota',
            'harga_per_jam' => 65000,
            'harga_per_hari' => 650000,
            'harga_per_minggu' => 0,
            'gambar' => 'car-3.png',
            'transmisi' => 'Automatic',
            'seat' => '7 Adults',
            'fuel' => 'Solar',
            'luggage' => '5 Bags',
            'mileage' => '25.000'
        ],
        [
            'id' => 4,
            'nama' => 'Daihatsu Sigra Putih 2023',
            'merek' => 'Daihatsu',
            'harga_per_jam' => 30000,
            'harga_per_hari' => 300000,
            'harga_per_minggu' => 0,
            'gambar' => 'car-4.jpg',
            'transmisi' => 'Manual',
            'seat' => '7 Adults',
            'fuel' => 'Bensin',
            'luggage' => '5 Bags',
            'mileage' => '30.000'
        ]
    ];

public function cars()
{
    $perPage = 6;

    $currentPage = (int) ($this->request->getGet('page') ?? 1);

    $totalMobil = count($this->mobil);

    $totalPages = ceil($totalMobil / $perPage);

    $mobil = array_slice(
        $this->mobil,
        ($currentPage - 1) * $perPage,
        $perPage
    );

    $data = [
        'title'       => 'Cars | Harznet Rental',
        'page'        => 'Mobil',
        'titlePage'   => 'Pilih Mobil Anda',
        'bg'          => 'bg_3.jpg',
        'mobil'       => $mobil,
        'currentPage' => $currentPage,
        'totalPages'  => $totalPages
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

    // Hapus mobil yang sedang dibuka dari daftar rekomendasi
    $mobilTerkait = array_filter($this->mobil, function ($m) use ($id) {
        return $m['id'] != $id;
    });
    $mobilTerkait = array_slice(
    array_values(
        array_filter($this->mobil, function ($m) use ($id) {
            return $m['id'] != $id;
        })
    ),
    0,
    3
);

    $data = [
        'title'  => $detail['nama'],
        'mobil'  => $detail,
        'mobils' => $mobilTerkait
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
