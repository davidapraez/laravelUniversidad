<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class programaSeeder extends Seeder
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
                'codprograma' => '1',
                'nomprograma' => 'Licenciatura en artes',
                'facultades_codfacultad' => '10',
            ],
            [
                'codprograma' => '2',
                'nomprograma' => 'Ingenieria de sistemas',
                'facultades_codfacultad' => '11',
            ],
            [
                'codprograma' => '3',
                'nomprograma' => 'Ingenieria Civil',
                'facultades_codfacultad' => '11',
            ],
            [
                'codprograma' => '4',
                'nomprograma' => 'Administracion de empresas',
                'facultades_codfacultad' => '13',
            ],
            [
                'codprograma' => '5',
                'nomprograma' => 'Ingenieria ambiental',
                'facultades_codfacultad' => '12',
            ],


        ];
        DB::table('programas')->insert($datos);
    }
}
