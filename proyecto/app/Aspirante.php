<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    protected $table = 'aspirante';

    protected $fillable = ['cedula', 'nombre', 'promedio'];

    protected $primaryKey = 'cedula';
}
