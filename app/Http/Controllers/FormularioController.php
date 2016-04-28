<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use App\Aspirante;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        Aspirante::create([
            'cedula' => $request['cedula'],
            'nombre' => $request['nombre'],
            'promedio' => $request['promedio'],
            ]);

        Formulario::create([
            'Pais_id_pais' => $request['pais'],
            'Aspirante_cedula' => $request['cedula'],
            'Disciplina_id' => $request['carrera'],
            ]); 

            /*$formulario = Formulario::findByDatas(
                $request->get('pais'),
                $request->get('carrera'),
                $request->get('promedio'))->get();

        return $formulario[0]->id_formulario;*/
        return redirect('registrar')->with('message', '¡Formulario registrado con exito!');
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
