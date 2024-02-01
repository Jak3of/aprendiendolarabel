<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function () {
    return phpinfo();
});


Route::get('/mostrar-fecha', function () {
    $titulo = 'Mostrar Fecha';
    return view('mostrar-fecha', ['fecha' => date('Y-m-d') , 'titulo' => $titulo]); 
});

//api get de arrays users


Route::get('/api/users', function () {
    // obtener todos los usuarios desde https://jsonplaceholder.typicode.com/users
    $url = 'https://jsonplaceholder.typicode.com/users';
    $users = json_decode(file_get_contents($url), true);
    return $users;
});

Route::get('/api/{pelicula?}', function ($pelicula = 'pelicula1') {
    $year = 'year1';
    $year1 = date('Y');
    $dato = $pelicula.' '.$$year ;

    return $dato;
})->where('pelicula', '[0-9a-zA-Z]+');


Route::get('/listado-peliculas', function () {
    $titulo = "Listado de Peliculas";
    
    $peliculas = [
        'Monsters: El infierno del dragón (2024)',
        'Si Fueras el Último (2024)',
        'Los menospreciados (2024)',
        'Cazadores en tierra inhóspita (2024)'
    ];
    return view('peliculas.listado')
        ->with('peliculas', $peliculas)
        ->with('titulo', $titulo);

});

Route::get('/generic', function () {
    return view('pagina');
});
