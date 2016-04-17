@extends('layout')
@section('content')

<div class="container centrar">
	<h2>Consultar becas</h2>
	{!!Form::open(['action' => ['EstudianteController@sumar'], 'method' => 'GET', 'class' => 'form-horizontal'])!!}
	<div class="form-group">
	    <label for="cedula" class="col-sm-2 col-md-2 control-label">Numero de cedula</label>
	    <div class="col-sm-6 col-md-8">
	      {!!Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cedula'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-sm-offset-4 col-sm-4">
	      <button type="submit" class="btn btn-primary btn-block">Consultar</button>
	    </div>
  	</div>
	{!!Form::close()!!}
	<h2 style="margin-top: 40px;">Resultado de beca</h2>
	<div class="table-responsive">
	  <table class="table table-hover">
	    <thead>
	        <tr>
	            <th data-field="nombre">Id</th>
	            <th data-field="apellido">Nombre</th>
	            <th data-field="hora_inicio">Disciplina</th>
	            <th data-field="cantidad_personas">Pais</th>
	            <th data-field="puntos-canjeo">Programa</th>
	            <th data-field="puntos-canjeo">Porcentaje</th>
	        </tr>
        </thead>
        <tbody>
        	<tr>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        	</tr>
        	<tr>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        		<td>1</td>
        	</tr>
        </tbody>
	  </table>
	</div>
</div>

@endsection