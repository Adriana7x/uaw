<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>uaw</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="antialiased">
    <br>
    <br>
    <h3 align="center"> SISTEMA DE REGISTRO DE DOCUMENTOS</h3>
    <hr>
    <br>
    <br>
    <br>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <br>
            <div class="fadeIn first">
                <img src="images/logo_uaw.png" id="icon" />
            </div>
            <br>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="text-sm  underline">Inicio</a>
            @else
            <form>
                <a href="{{ route('login') }}" class="btn btn-secondary">Ingresar</a>
                @if (Route::has('register'))
              <!--   <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a> -->
              <a href="{{route('registro')}}" class="btn btn-secondary">Registrarse</a>

                @endif
                @endauth
                @endif

            </form>
            <br>
            <div id="formFooter">
                <a href="#">Alli Shamushka !</a>
            </div>
        </div>
    </div>
</body>

</html>