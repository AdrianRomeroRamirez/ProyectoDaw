<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {

    $libros = App\Models\Libro::all();

    return view('index', compact("libros"));
});

Route::get("/leer/{id}", function ($id) {

    return App\Models\Usuario::find($id)->registrado;

});

Route::get("/leer/{id}/registrado", function ($id) {

    return App\Models\Registrado::find($id)->usuario;

});
