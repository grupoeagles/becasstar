@extends('layout')
@section('content')
	<h1>Hola Estudiante</h1>

	{!!Form::open(['action' => ['EstudianteController@sumar'], 'method' => 'GET', 'class' => 'form-horizontal'])!!}
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Numero 1</label>
	    <div class="col-sm-6 col-md-8">
	      {!!Form::number('numero1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero 1'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 col-md-2 control-label">Numero 2</label>
	    <div class="col-sm-6 col-md-8">
	      {!!Form::number('numero2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero 2'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Enviar</button>
	    </div>
  	</div>
	{!!Form::close()!!}

@endsection
