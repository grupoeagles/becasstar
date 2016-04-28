<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $table = 'resultado';

    protected $fillable = ['porcentaje_becas', 'Formulario_id'];
}
