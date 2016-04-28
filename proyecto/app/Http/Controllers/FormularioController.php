<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioCreateRequest;
use App\Http\Requests\FormularioReadRequest;
use Illuminate\Http\Request;
use App\Formulario;
use App\Aspirante;
use App\Resultado;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FormularioReadRequest $request)
    {
        $cedula = $request->get('cedula');
        $aspirantes = Formulario::findByCedula($cedula)->get();
        //dd($aspirantes);
        return view('resultado', compact('aspirantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormularioCreateRequest $request)
    {
        Aspirante::create([
            'cedula' => $request['cedula'],
            'nombre' => $request['nombre'],
            'promedio' => $request['promedio'],
            ]);

        $formulario = Formulario::create([
            'Pais_id_pais' => $request['pais'],
            'Aspirante_cedula' => $request['cedula'],
            'Disciplina_id' => $request['carrera'],
            ]); 

            
        $this->asignarBecas($request, $formulario); 
        
        //return $this->queryBecas75($request);

        return redirect('registrar')->with('message', '¡Formulario registrado con exito!');
    }

    /*
    mediante esta funcion asigno la respectiva beca a la tabla resultado si cumple las condiciones
    de promedio, pais y disciplina, si no cumple con las condiciones asigna una beca del 0%
    */
    public function asignarBecas($request, $formulario){
        if($request['promedio'] == 5.0){
                if($this->queryBecas100($request)<=3){
                    Resultado::create([
                        'porcentaje_becas' => 100,
                        'Formulario_id' => $formulario->id,
                        ]);
                }else{
                    Resultado::create([
                        'porcentaje_becas' => 0,
                        'Formulario_id' => $formulario->id,
                        ]);
                }
            }elseif ($request['promedio'] >= 4.7 && $request['promedio'] <= 4.9) {
                if($this->queryBecas75($request)<=2){
                    Resultado::create([
                        'porcentaje_becas' => 75,
                        'Formulario_id' => $formulario->id,
                        ]);
                }else{
                    Resultado::create([
                        'porcentaje_becas' => 0,
                        'Formulario_id' => $formulario->id,
                        ]);
                }
            }elseif ($request['promedio'] >= 4.3 && $request['promedio'] <= 4.6) {
                if($this->queryBecas50($request)<=3){
                    Resultado::create([
                        'porcentaje_becas' => 50,
                        'Formulario_id' => $formulario->id,
                        ]);
                }else{
                    Resultado::create([
                        'porcentaje_becas' => 0,
                        'Formulario_id' => $formulario->id,
                        ]);
                }
            }elseif ($request['promedio'] >= 4.0 && $request['promedio'] <= 4.2) {
                if($this->queryBecas25($request)<=2){
                    Resultado::create([
                        'porcentaje_becas' => 25,
                        'Formulario_id' => $formulario->id,
                        ]);
                }else{
                    Resultado::create([
                        'porcentaje_becas' => 0,
                        'Formulario_id' => $formulario->id,
                        ]);
                }
            }else{
                Resultado::create([
                        'porcentaje_becas' => 0,
                        'Formulario_id' => $formulario->id,
                        ]);
            }
    }

    /*
    mediante esta funcion se llaman los respectivos querys creados en el modelo
    y retorna el numero de filas encontradas
    */
    public function queryBecas100(Request $request){
        $query = Formulario::findByDatas100(
                $request->get('pais'),
                $request->get('carrera'),
                $request->get('promedio'))->get();

        return $query->count();
    }

    /*
    mediante esta funcion se llaman los respectivos querys creados en el modelo
    y retorna el numero de filas encontradas
    */
    public function queryBecas75(Request $request){
        $query = Formulario::findByDatas75(
                $request->get('pais'),
                $request->get('carrera'))->get();

        return $query->count();
    }

    /*
    mediante esta funcion se llaman los respectivos querys creados en el modelo
    y retorna el numero de filas encontradas
    */
    public function queryBecas50(Request $request){
        $query = Formulario::findByDatas50(
                $request->get('pais'),
                $request->get('carrera'))->get();

        return $query->count();
    }

    /*
    mediante esta funcion se llaman los respectivos querys creados en el modelo
    y retorna el numero de filas encontradas
    */
    public function queryBecas25(Request $request){
        $query = Formulario::findByDatas25(
                $request->get('pais'),
                $request->get('carrera'))->get();

        return $query->count();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
