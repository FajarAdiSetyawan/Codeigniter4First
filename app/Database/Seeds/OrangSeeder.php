<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

define('TIMEZONE', 'Asia/Jakarta');
date_default_timezone_set(TIMEZONE);


class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {


    // $data = [
    //   [
    //     'nama'        => 'Fajar Adi Setyawan',
    //     'alamat'      => 'Jl. jfsjdkcndskj',
    //     'created_at'  => Time::now(),
    //     'updated_at'  => Time::now()
    //   ],
    //   [
    //     'nama'        => 'Fajar Adi Setyawan',
    //     'alamat'      => 'Jl. fjbvjhfdkvnd',
    //     'created_at'  => Time::now(),
    //     'updated_at'  => Time::now()
    //   ],
    //   [
    //     'nama'        => 'Fajar Adi Setyawan',
    //     'alamat'      => 'Jl. ihvcsdiukvjsd',
    //     'created_at'  => Time::now(),
    //     'updated_at'  => Time::now()
    //   ]
    // ];

    $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 1000; $i++) {
      $data = [
        'nama'        => $faker->name,
        'alamat'      => $faker->address,
        'created_at'  => Time::createFromTimestamp($faker->unixTime()),
        'updated_at'  => Time::now()
      ];
      $this->db->table('orang')->insert($data);
    }


    // Simple Queries
    // $this->db->query(
    //   "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
    //   $data
    // );

    // Using Query Builder
    // $this->db->table('orang')->insertBatch($data); //array
  }
}
