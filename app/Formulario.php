<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formulario';

    protected $fillable = ['Pais_id_pais', 'Aspirante_cedula', 'Disciplina_id'];

    public function scopeFindByDatas($query, $pais, $disc, $prom)
    {
        if (trim($pais) != "" && trim($disc) && trim($prom) != "") {
            $query->join('aspirante', 'formulario.Aspirante_cedula', '=', 'aspirante.cedula')
                ->where('Pais_id_pais', '=', $pais)
                ->where('Disciplina_id', '=', $disc)
                ->where('aspirante.promedio', '=', $prom);
        }
    }
}
