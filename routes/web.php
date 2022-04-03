<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosControllers;
use App\Models\Alumno;
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

Route::get('/index', function () {
    return view('index');
})->name('principal');

Route::get('/contactos', function () {
    return view('contactos');
})->name('Contactos');

Route::get('/alumnos', function () {
    $listaAlumns=Alumno::all();
    return view('lista_alumns', ['alumnos' => $listaAlumns]);
})->name('lista_alumns');

Route::post('/index', [AlumnosControllers::class,'store'])->name('Alumnos');
Route::get('/index',[AlumnosControllers::class,'index'])->name('ver-alumnos');

Route::get('/show/{id}',[AlumnosControllers::class,'show'])->name('alumnos-show');
Route::patch('/update/{id}',[AlumnosControllers::class,'update'])->name('alumno-update');
Route::delete('/delete/{id}',[AlumnosControllers::class,'destroy'])->name('eliminar-alumno');
