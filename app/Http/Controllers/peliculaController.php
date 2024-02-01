<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculaController extends Controller
{
    //
    public function index(){
        $titulo = "Listado de Peliculas";
    
    $peliculas = [
        'Monsters: El infierno del dragón (2024)',
        'Si Fueras el Último (2024)',
        'Los menospreciados (2024)',
        'Cazadores en tierra inhóspita (2024)'
    ];
    
        
        return view('pelicula.index')
        ->with('peliculas', $peliculas)
        ->with('titulo', $titulo);;
    }
}
