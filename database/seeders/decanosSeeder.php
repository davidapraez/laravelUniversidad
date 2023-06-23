<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class decanosSeeder extends Seeder
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
                'coddecano' => '1',
                'nomdecano' => 'Gerardo Sanchez',
                'facultad' => '10',
            ],
            [
                'coddecano' => '2',
                'nomdecano' => 'Alexander Baron',
                'facultad' => '11',
            ],
            [
                'coddecano' => '3',
                'nomdecano' => 'Jorge Pantoja',
                'facultad' => '13',
            ],
            [
                'coddecano' => '4',
                'nomdecano' => 'Leonardo Enriquez',
                'facultad' => '12',
            ],
            [
                'coddecano' => '5',
                'nomdecano' => 'Gloria Londoño',
                'facultad' => '14',
            ],


        ];
        DB::table('decanos')->insert($datos);
    }
}
