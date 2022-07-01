<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/paises', 'App\Http\Controllers\PaisController@index'); // GET /paises
Route::post('/paises', 'App\Http\Controllers\PaisController@store'); // POST /paises
Route::get('/paises/{id}', 'App\Http\Controllers\PaisController@show'); // GET /paises/{id}
Route::put('/paises/{id}', 'App\Http\Controllers\PaisController@update'); // PUT /paises/{id}
Route::delete('/paises/{id}', 'App\Http\Controllers\PaisController@destroy'); // DELETE /paises/{id}

Route::get('/ciudades', 'App\Http\Controllers\CiudadController@index'); // GET /ciudades
Route::post('/ciudades', 'App\Http\Controllers\CiudadController@store'); // POST /ciudades
Route::get('/ciudades/{id}', 'App\Http\Controllers\CiudadController@show'); // GET /ciudades/{id}
Route::put('/ciudades/{id}', 'App\Http\Controllers\CiudadController@update'); // PUT /ciudades/{id}
Route::delete('/ciudades/{id}', 'App\Http\Controllers\CiudadController@destroy'); // DELETE /ciudades/{id}

Route::get('/aerolineas', 'App\Http\Controllers\AerolineaController@index'); // GET /aerolineas
Route::post('/aerolineas', 'App\Http\Controllers\AerolineaController@store'); // POST /aerolineas
Route::get('/aerolineas/{id}', 'App\Http\Controllers\AerolineaController@show'); // GET /aerolineas/{id}
Route::put('/aerolineas/{id}', 'App\Http\Controllers\AerolineaController@update'); // PUT /aerolineas/{id}
Route::delete('/aerolineas/{id}', 'App\Http\Controllers\AerolineaController@destroy'); // DELETE /aerolineas/{id}

Route::get('/vuelos', 'App\Http\Controllers\VueloController@index'); // GET /vuelos
Route::post('/vuelos', 'App\Http\Controllers\VueloController@store'); // POST /vuelos
Route::get('/vuelos/{id}', 'App\Http\Controllers\VueloController@show'); // GET /vuelos/{id}
Route::put('/vuelos/{id}', 'App\Http\Controllers\VueloController@update'); // PUT /vuelos/{id}
Route::delete('/vuelos/{id}', 'App\Http\Controllers\VueloController@destroy'); // DELETE /vuelos/{id}
