<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | @yield('titulo')</title>
</head>
<body>

    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>Eduardo Pessine - 2021</p>
    </footer>
    
</body>
</html>