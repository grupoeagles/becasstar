<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $table = 'aspirante';

    protected $fillable = ['porcentaje_becas', 'Formulario_id'];
}
