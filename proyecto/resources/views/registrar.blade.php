@extends('layout')
@section('content')
	@include('alerts.request')
	@include('alerts.success')
<div class="container">
	<h1 class="centrar">Formulario becas</h1>

	{!!Form::open(['route' => ['gestionFormulario.store'], 'method' => 'POST', 'class' => 'form-horizontal'])!!}
	<div class="form-group">
	    <label for="cedula" class="col-sm-2 col-md-2 control-label">Cedula de ciudadania</label>
	    <div class="col-sm-6 col-md-8">
	      {!!Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cedula'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="nombres" class="col-sm-2 col-md-2 control-label">Nombres completos</label>
	    <div class="col-sm-6 col-md-8">
	      {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="carrera" class="col-sm-2 col-md-2 control-label">Carrera a la que aspira</label>
	    <div class="col-sm-6 col-md-8">
	      {!! Form::select('carrera',
	       array('1' => 'Ingenieria de sistemas', '2' => 'Salud ocupacional', '3' => 'Administracion de empresas'), null, ['class' => 'form-control', 'placeholder' => 'Selecciona una carrera'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="pais" class="col-sm-2 col-md-2 control-label">Pais de origen</label>
	    <div class="col-sm-6 col-md-8">
	      {!! Form::select('pais',
	       array('1' => 'Brasil', '2' => 'Colombia', '3' => 'Argentina'), null, ['class' => 'form-control', 'placeholder' => 'Selecciona un pais'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <label for="promedio" class="col-sm-2 col-md-2 control-label">Promedio actual</label>
	    <div class="col-sm-6 col-md-8">
	      {!!Form::number('promedio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el promedio', 'step' => 'any'])!!}
	    </div>
  	</div>
  	<div class="form-group">
	    <div class="col-sm-offset-4 col-sm-4">
	      <button type="submit" class="btn btn-primary btn-block">Enviar</button>
	    </div>
  	</div>
	{!!Form::close()!!}
</div>
@endsection