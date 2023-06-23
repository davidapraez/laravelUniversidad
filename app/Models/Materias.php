<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table='materias';
    protected $primaryKey= 'codmateria';
    public $timestamps='true';
}
