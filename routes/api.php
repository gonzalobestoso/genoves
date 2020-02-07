<?php

use Illuminate\Http\Request;

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

Route::resource('alumnos', 'Alumno\AlumnoController');
Route::resource('carreras', 'Carrera\CarreraController');
Route::resource('facultads', 'Facultad\FacultadController');
Route::resource('fecha_examens', 'FechaExamen\FechaExamenController');
Route::resource('materia', 'Materia\MateriaController');
Route::resource('noticias', 'Noticia\NoticiaController');
Route::resource('users', 'User\UserController');
