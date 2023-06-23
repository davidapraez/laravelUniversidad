<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudades;
use App\Models\Barrios;
use App\Models\Programas;

class Estudiantes extends Model
{
    protected $table='estudiantes';
    protected $primaryKey= 'codestudiante';
    public $timestamps='true';

    public function ciudad(){
        return $this->BelongsTo(Ciudades::class,'ciudades_codciudad');
    }
    public function barrio(){
        return $this->BelongsTo(Barrios::class,'barrios_codbarrio');
    }
    public function programa(){
        return $this->BelongsTo(Programas::class,'programas_codprograma');
    }
}
