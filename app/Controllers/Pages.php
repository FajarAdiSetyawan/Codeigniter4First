<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {

    $data = [
      'title' => 'Home | Fajar Adi Setyawan',
      'tes' => ['satu', 'dua', 'tiga']
    ];
    return view('pages/home', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Me'
    ];
    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us',
      'alamat' => [
        'tipe' => 'Rumah',
        'alamat' => 'Jl. ABC',
        'kota' => 'Jakarta'
      ],
      [
        'tipe' => 'Kantor',
        'alamat' => 'Jl. ABC',
        'kota' => 'Jakarta'
      ]
    ];

    return view('pages/contact', $data);
  }

  //--------------------------------------------------------------------

}
