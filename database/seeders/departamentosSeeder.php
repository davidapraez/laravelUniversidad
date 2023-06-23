<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class departamentosSeeder extends Seeder
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
                'coddepto' => '1',
                'nomdepto' => 'Huila',
            ],
            [
                'coddepto' => '2',
                'nomdepto' => 'Nariño',
            ],
            [
                'coddepto' => '3',
                'nomdepto' => 'Cauca',
            ],
            [
                'coddepto' => '4',
                'nomdepto' => 'Valle',
            ],
            [
                'coddepto' => '5',
                'nomdepto' => 'Quindio',
            ],
            [
                'coddepto' => '6',
                'nomdepto' => 'Antioquia',
            ],


        ];
        DB::table('departamentos')->insert($datos);
    }
}
