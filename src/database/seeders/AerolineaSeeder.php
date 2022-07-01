<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AerolineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        [
            'nombre'=> 'AMER',
            'telefono'=> '032145697',
            'email'=> 'infor@amer.com',
            'direccion'=> 'via a la costa'
            'created_at'=> '2022-07-01T00:10:23.000000Z',
            'updated_at'=> '2022-07-01T00:10:23.000000Z'
        ],
        [
          'nombre'=> 'siviaje',
          'telefono'=> '032145697',
          'email'=> 'infor@siviaje.com',
          'direccion'=> 'via a la costa'
          'created_at'=> '2022-07-01T00:10:23.000000Z',
          'updated_at'=> '2022-07-01T00:10:23.000000Z'
        ]
      ];

      DB:table('pais')->insert($data);
    }
}
