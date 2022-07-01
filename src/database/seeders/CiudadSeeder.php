<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
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
            'nombre'=> 'CUENCA',
            'descripcion'=> 'CUE',
            'image_url'=> 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
            'pais_id'=> 1,
            'created_at'=> '2022-07-01T00:10:23.000000Z',
            'updated_at'=> '2022-07-01T00:10:23.000000Z'
        ],
        [
          'nombre'=> 'MIAMI',
          'descripcion'=> 'MIAMIA',
          'image_url'=> 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
          'pais_id'=> 2,
          'created_at'=> '2022-07-01T00:10:23.000000Z',
          'updated_at'=> '2022-07-01T00:10:23.000000Z'
        ],
        [
            'nombre'=> 'GUAYAQUIL',
            'descripcion'=> 'GYE',
            'image_url'=> 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
            'pais_id'=> 1,
            'created_at'=> '2022-07-01T00:10:23.000000Z',
            'updated_at'=> '2022-07-01T00:10:23.000000Z'
        ]
      ];

      DB:table('ciudad')->insert($data);
    }
}
