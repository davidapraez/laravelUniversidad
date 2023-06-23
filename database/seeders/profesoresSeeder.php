<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class profesoresSeeder extends Seeder
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
                'codprofesor' => '1',
                'nomprofesor' => 'Javier Jimenez',
                'materias_codmateria' => '2',
            ],
            [
                'codprofesor' => '2',
                'nomprofesor' => 'Nelson Jaramillo',
                'materias_codmateria' => '3',
            ],
            [
                'codprofesor' => '3',
                'nomprofesor' => 'Alexander Baron',
                'materias_codmateria' => '4',
            ],
            [
                'codprofesor' => '4',
                'nomprofesor' => 'Jaime Davila',
                'materias_codmateria' => '5',
            ],
            [
                'codprofesor' => '5',
                'nomprofesor' => 'Franklin Jimenez',
                'materias_codmateria' => '1',
            ],


        ];
        DB::table('profesores')->insert($datos);
    }
}
