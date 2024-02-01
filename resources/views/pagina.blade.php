
@extends('layout.main')

@section('titulo', 'PAGINA PRINCIPAL')

@section('header') {{-- si no se utiliza parent se remplaza el contenido --}}
    {{--@parent combina el contenido de la seccion 'header' de la seccion 'main'--}}
     CABECERA DE LA PAGINA CAMBIADA  ( PAGINA PRINCIPAL) 
@stop

@section('content')

    <h1> CONTENIDO DE LA PAGINA </h1>

@stop


