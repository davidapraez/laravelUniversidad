<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class materiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codmateria' => '1',
                'nommateria' => 'Calculo',
                'cremateria' => '3',
            ],
            [
                'codmateria' => '2',
                'nommateria' => 'Fisica I',
                'cremateria' => '2',
            ],
            [
                'codmateria' => '3',
                'nommateria' => 'Estadistica',
                'cremateria' => '3',
            ],
            [
                'codmateria' => '4',
                'nommateria' => 'Estructura de datos',
                'cremateria' => '4',
            ],
            [
                'codmateria' => '5',
                'nommateria' => 'Ingenieria de Software',
                'cremateria' => '2',
            ],


        ];
        DB::table('materias')->insert($datos);
    }
}
