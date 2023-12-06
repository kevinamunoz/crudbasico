<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel Básico</title>
    </head>
            <a class="text-slate-200" href="{{route('register')}}">Registrar</a>

            <a class="text-slate-200" href="{{route('listar')}}">Listar</a>
        </div>

    </header>
    <body class="bg-slate-600">
       <hr>
       <h1>@yield('titulo')</h1>
       <hr>
       <h1>@yield('contenido')</h1>
    </body>

</html>


