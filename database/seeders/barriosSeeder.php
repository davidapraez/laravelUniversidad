<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class barriosSeeder extends Seeder
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
                'codbarrio' => '2',
                'nombarrio' => 'Aquine',
                'estbarrio' => '3',
                'comuna' => '2',
            ],
            [
                'codbarrio' => '3',
                'nombarrio' => 'Pandiaco',
                'estbarrio' => '2',
                'comuna' => '9',
            ],
            [
                'codbarrio' => '4',
                'nombarrio' => 'Universitario',
                'estbarrio' => '3',
                'comuna' => '9',
            ],
            [
                'codbarrio' => '5',
                'nombarrio' => 'Nueva Aranda',
                'estbarrio' => '1',
                'comuna' => '7',
            ],
            [
                'codbarrio' => '6',
                'nombarrio' => 'El pilar',
                'estbarrio' => '2',
                'comuna' => '4',
            ],


        ];
        DB::table('barrios')->insert($datos);
    }
}
