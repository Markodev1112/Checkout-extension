<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/prueba', function(){

    $path = "posts/articulo-de-prueba.jpg";

    Storage::copy($path, $target);

    if ( Storage::exists($path) ) {
        $path = str_replace('.png', '-copia.png', $path);
    }

    return $path;

});

Route::get('/prueba2', function(){

    /* $path = "posts/articulo-de-prueba.jpg";
    $target = "posts2/articulo-de-prueba.jpg";
    Storage::copy($path, $target);
    return "El archivo ha sido copiado"; */

    $path = "posts2/articulo-de-prueba.jpg";
    $target = "posts3/articulo-de-prueba.jpg";
    Storage::move($path, $target);
    return "El archivo ha sido movido";

});