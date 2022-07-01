<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
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
              'nombre'=> 'ECUADOR',
              'codigo_iso'=> 'ECU',
              'codigo_telefono'=> '593',
              'created_at'=> '2022-07-01T00:10:23.000000Z',
              'updated_at'=> '2022-07-01T00:10:23.000000Z'
          ],
          [
              'nombre'=> 'USA',
              'codigo_iso'=> 'USA',
              'codigo_telefono'=> '593',
              'created_at'=> '2022-07-01T00:10:34.000000Z',
              'updated_at'=> '2022-07-01T00:10:34.000000Z'
          ]
        ];

        DB:table('pais')->insert($data);
    }
}
