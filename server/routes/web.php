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

    Route::get('/contacto', 'ContactoController@index')->name('contacto.index');
    Route::post('/contacto', 'ContactoController@store')->name('contacto.store');
    Route::get('/cotizacion', 'CotizacionController@index')->name('cotizacion.index');
    Route::post('/cotizacion', 'CotizacionController@store')->name('cotizacion.store');
    Route::get('/usuario', 'UsuarioController@index')->name('usuario.index');
    Route::post('/usuario', 'UsuarioController@store')->name('usuario.store');
    Route::get('/producto', 'ProductoController@index')->name('producto.index');
    Route::post('/producto', 'ProductoController@store')->name('producto.store');
                
    

});

