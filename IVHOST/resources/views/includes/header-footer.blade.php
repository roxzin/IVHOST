<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo-pagina', config('app.name'))</title> 
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">

</head>

<body>


    <main>
        <div class="container">
            @yield('conteudo-pagina')
        </div>
    </main>

  
</body>

</html>
