<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Facultades;

class Programas extends Model
{
    protected $table='programas';
    protected $primaryKey= 'codprograma';
    public $timestamps='true';

    public function facultad(){
        return $this->BelongsTo(Facultades::class,'facultades_codfacultad');
    }

}
