<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ciudadesSeeder extends Seeder
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
                'codciudad' => '1',
                'nomciudad' => 'Pasto',
                'departamento' => '2',
            ],
            [
                'codciudad' => '2',
                'nomciudad' => 'Cali',
                'departamento' => '4',
            ],
            [
                'codciudad' => '3',
                'nomciudad' => 'Popayan',
                'departamento' => '3',
            ],
            [
                'codciudad' => '4',
                'nomciudad' => 'Armenia',
                'departamento' => '5',
            ],
            [
                'codciudad' => '5',
                'nomciudad' => 'Medellin',
                'departamento' => '6',
            ],


        ];
        DB::table('ciudades')->insert($datos);
    }
}
