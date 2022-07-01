<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VueloSeeder extends Seeder
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
          'codigo'=> 'GYE-CUE_001',
          'aerolinea_id'=> 1,
          'ciudad_origen_id'=> 1,
          'ciudad_destino_id'=> 2,
          'precio'=> 200,
          'duracion_minutos'=> 360,
          'no_escalas'=> 1,
          'fecha_salida'=> '2022-06-29 23:01:28',
          'fecha_llegada'=> '2022-06-30 23:01:28',
          'created_at'=> '2022-07-01T08:34:16.000000Z',
          'updated_at'=> '2022-07-01T08:34:16.000000Z'
        ],
        [
          'codigo'=> 'MIA-GYE_001',
          'aerolinea_id'=> 1,
          'ciudad_origen_id'=> 2,
          'ciudad_destino_id'=> 4,
          'precio'=> 200,
          'duracion_minutos'=> 360,
          'no_escalas'=> 1,
          'fecha_salida'=> '2022-06-29 23:01:28',
          'fecha_llegada'=> '2022-06-30 23:01:28',
          'created_at'=> '2022-07-01T08:34:16.000000Z',
          'updated_at'=> '2022-07-01T08:34:16.000000Z'
        ]
      ];

      DB:table('ciudad')->insert($data);
    }
}
