<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formulario';

    protected $fillable = ['Pais_id_pais', 'Aspirante_cedula', 'Disciplina_id'];

    /*
    query que de acuerdo al pais, la disciplina y el promedio verifica si ya hay becas
    del 100% asignadas
    */
    public function scopeFindByDatas100($query, $pais, $disc, $prom)
    {
        if (trim($pais) != "" && trim($disc) && trim($prom) != "") {
            $query->join('aspirante', 'formulario.Aspirante_cedula', '=', 'aspirante.cedula')
                ->where('Pais_id_pais', '=', $pais)
                ->where('Disciplina_id', '=', $disc)
                ->where('aspirante.promedio', '=', $prom);
        }
    }

    /*
    query que de acuerdo al pais y la disciplina verifica si ya hay becas
    del 75% asignadas
    */
    public function scopeFindByDatas75($query, $pais, $disc)
    {
        if (trim($pais) != "" && trim($disc) != "") {
            $query->join('aspirante', 'formulario.Aspirante_cedula', '=', 'aspirante.cedula')
                ->where('Pais_id_pais', '=', $pais)
                ->where('Disciplina_id', '=', $disc)
                ->where('aspirante.promedio', '>=', 4.7)
                ->where('aspirante.promedio', '<=', 4.9);
        }
    }

    /*
    query que de acuerdo al pais y la disciplina verifica si ya hay becas
    del 50% asignadas
    */
    public function scopeFindByDatas50($query, $pais, $disc)
    {
        if (trim($pais) != "" && trim($disc) != "") {
            $query->join('aspirante', 'formulario.Aspirante_cedula', '=', 'aspirante.cedula')
                ->where('Pais_id_pais', '=', $pais)
                ->where('Disciplina_id', '=', $disc)
                ->where('aspirante.promedio', '>=', 4.3)
                ->where('aspirante.promedio', '<=', 4.6);
        }
    }

    /*
    query que de acuerdo al pais y la disciplina verifica si ya hay becas
    del 25% asignadas
    */
    public function scopeFindByDatas25($query, $pais, $disc)
    {
        if (trim($pais) != "" && trim($disc) != "") {
            $query->join('aspirante', 'formulario.Aspirante_cedula', '=', 'aspirante.cedula')
                ->where('Pais_id_pais', '=', $pais)
                ->where('Disciplina_id', '=', $disc)
                ->where('aspirante.promedio', '>=', 4.0)
                ->where('aspirante.promedio', '<=', 4.2);
        }
    }

    public function scopeFindByCedula($query, $cedula)
    {
        if (trim($cedula) != "") {
            $query->join('pais', 'formulario.Pais_id_pais', '=', 'pais.id_pais')
                ->join('resultado', 'formulario.id_formulario', '=', 'resultado.Formulario_id')
                ->join('aspirante', 'formulario.Aspirante_cedula', '=', 'aspirante.cedula')
                ->join('disciplina', 'formulario.Disciplina_id', '=', 'disciplina.id_disciplina')
                ->where('aspirante.cedula', '=', $cedula);
        }
    }
}
