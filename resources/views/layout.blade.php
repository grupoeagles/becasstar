<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
         {!! Html::style('css/bootstrap.min.css') !!}
         {!! Html::style('css/styles.css') !!}
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>

    <nav class="navbar navbar-default container-fluid">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Beca Star</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/proyecto/public">Inicio</a></li>
            <li><a href="registrar">Registrate</a></li>
            <li><a href="resultado">Resultado</a></li>
            <li><a href="conocenos">Conocenos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        @yield('content')

        {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
    </body>
</html>
