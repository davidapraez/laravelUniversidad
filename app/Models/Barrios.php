<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrios extends Model
{
    protected $table='barrios';
    protected $primaryKey= 'codbarrio';
    public $timestamps='true';
}
