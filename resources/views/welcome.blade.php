@extends('layout')
@section('content')
    <div class="container centrar" >
        <h1>¡Espectaculares becas!</h1>
        <div class="row" style="margin-top: 30px; text-align: justify;">
        <div class="col-md-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </div>
        <div class="col-md-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img class="imagen" style="max-width: 45%;" src="http://www.vanguardia.com/sites/default/files/imagecache/Noticia_600x400/foto_grandes_400x300_noticia/2014/07/16/trucos_para_estudiar_0.jpg">
            </div>
        </div>
    </div>
    <a href="{{route('estudiantes')}}">Estudiantes</a>
@endsection