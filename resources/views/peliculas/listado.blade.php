<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    
    <ul>
        @foreach ($peliculas as $pelicula)
            <li>{{ $pelicula }}</li>
        @endforeach        
    </ul>
    {{-- esto es un comentario --}}

    {{-- isset($titulo) ? $titulo : 'no hay titulo' --}}
    {{ $titulo or 'no hay titulo' or 'otro titulo' }} 

    @if (isset($peliculas) && count($peliculas) > 0)
        <h3>{{ 'Hay ' . count($peliculas) . ' peliculas' }}</h3>
    @elseif (isset($peliculas) && count($peliculas) == 0)
        <h3>{{ 'No hay peliculas' }}</h3>
    @else
        <h3>{{ 'No hay datos' }}</h3>
    @endif

    
    @if ($titulo != 'Listado final')
        @include('peliculas.listado', ['peliculas' => $peliculas, 'titulo' => 'Listado final'])
    @endif

</body>
</html>