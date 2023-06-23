<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
   protected $table='ciudades';
    protected $primaryKey= 'codciudad';
    public $timestamps='true';
}
