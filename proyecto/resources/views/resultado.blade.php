@extends('layout')
@section('content')
	@include('alerts.request')
<div class="container centrar">
	<h2>Consultar becas</h2>
	{!!Form::model(Request::all(),['route' => 'gestionFormulario.index', 'method' => 'GET', 'class' => 'form-horizontal'])!!}
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
	            <th>Cedula</th>
	            <th>Nombre</th>
	            <th>Disciplina</th>
	            <th>Pais</th>
	            <th>Promedio</th>
	            <th>Porcentaje</th>
	        </tr>
        </thead>
        <tbody>
        @foreach($aspirantes as $aspirante)
        	<tr>
        		<td>{{$aspirante->cedula}}</td>
        		<td>{{$aspirante->nombre}}</td>
        		<td>{{$aspirante->nombre_disciplina}}</td>
        		<td>{{$aspirante->nombre_pais}}</td>
        		<td>{{$aspirante->promedio}}</td>
        		<td>{{$aspirante->porcentaje_becas}}%</td>
        	</tr>
        @endforeach
        </tbody>
	  </table>
	</div>
</div>

@endsection