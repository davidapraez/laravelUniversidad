<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class estudiantesSeeder extends Seeder
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
                'codestudiante' => '1',
                'nomestudiante' => 'Henry Diaz',
                'edaestudiante' => '24',
                'fechestudiante' => Carbon::createFromFormat('d/m/Y', '12/05/1999')->toDateString(),
                'sexestudiante' => 'Masculino',
                'ciudades_codciudad' => '2',
                'barrios_codbarrio' => '4',
                'programas_codprograma' => '1',
            ],
            [
                'codestudiante' => '2',
                'nomestudiante' => 'Erika Solarte',
                'edaestudiante' => '18',
                'fechestudiante' => Carbon::createFromFormat('d/m/Y', '12/05/2005')->toDateString(),
                'sexestudiante' => 'Femenino',
                'ciudades_codciudad' => '3',
                'barrios_codbarrio' => '2',
                'programas_codprograma' => '5',
            ],
            [
                'codestudiante' => '3',
                'nomestudiante' => 'Jose Lopez',
                'edaestudiante' => '21',
                'fechestudiante' => Carbon::createFromFormat('d/m/Y', '12/05/2002')->toDateString(),
                'sexestudiante' => 'Masculino',
                'ciudades_codciudad' => '5',
                'barrios_codbarrio' => '4',
                'programas_codprograma' => '2',
            ],
            [
                'codestudiante' => '4',
                'nomestudiante' => 'Jaime Rodriguez',
                'edaestudiante' => '22',
                'fechestudiante' => Carbon::createFromFormat('d/m/Y', '12/05/2001')->toDateString(),
                'sexestudiante' => 'Masculino',
                'ciudades_codciudad' => '4',
                'barrios_codbarrio' => '3',
                'programas_codprograma' => '3',
            ],
            [
                'codestudiante' => '5',
                'nomestudiante' => 'Leonardo DiCaprio',
                'edaestudiante' => '23',
                'fechestudiante' => Carbon::createFromFormat('d/m/Y', '12/05/2000')->toDateString(),
                'sexestudiante' => 'Masculino',
                'ciudades_codciudad' => '5',
                'barrios_codbarrio' => '2',
                'programas_codprograma' => '5',
            ],


        ];
        DB::table('estudiantes')->insert($datos);
    }
}
