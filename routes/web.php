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
    return view('welcome');
});

Route::get('/contacto/{nombre?}/{edad?}',function($nombre='victor', $edad='15'){
    return view('contacto')
        ->with('nombre',$nombre)
        ->with('edad',$edad);
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);

Route::get('/listado/{titulo}', function($titulo){
    return view ('listado')
    ->with('titulo', $titulo)
    ->with('frutas', array('Naranja', 'Pera', 'Manzana', 'Frutilla'));
});

// Vistas de verduras por controlador

//listar
Route::get('/verduras','App\Http\Controllers\VerdurasController@index');

//Agregar
Route::get('/verduras/agregar','App\Http\Controllers\VerdurasController@agregar');

//editar
Route::get('/verduras/editar','App\Http\Controllers\VerdurasController@editar');

//editar

//eliminar
Route::get('/verduras/eliminar',[
    'uses' => 'App\Http\Controllers\VerdurasController@eliminar',
    'as' => 'eliminarVerdura'
]);

//guardar Formulario
Route::post('guardarFormulario','App\Http\Controllers\VerdurasController@guardarFormulario');