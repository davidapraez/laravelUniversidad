<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materias;

class Profesores extends Model
{
    protected $table='profesores';
    protected $primaryKey= 'codprofesor';
    public $timestamps='true';

    public function materia(){
        return $this->BelongsTo(Materias::class,'materias_codmateria');
    }
}
