<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>
    @section('header')
        CABECERA DE LA WEB (main)
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        PIE DE PAGINA DE LA WEB (main)
    @show

    
</body>
</html>