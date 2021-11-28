<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administradorcontroller;
use App\Http\Controllers\alumnocontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\profesorcontroller;
use App\Http\Controllers\aulacontroller;
use App\Http\Controllers\calificacioncontroller;
use App\Http\Controllers\carreraController;
use App\Http\Controllers\grupocontroller;
use App\Http\Controllers\horarioalumnocontroller;
use App\Http\Controllers\horarioprofesorcontroller;
use App\Http\Controllers\inscripcionController;
use App\Http\Controllers\materiacontroller;
use App\Http\Controllers\pagoscontroller;
use App\Http\Controllers\semestrecontroller;

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

Route::resource('user', UserController::class);
Route::resource('administrador', administradorController::class);
Route::resource('alumno', alumnoController::class);
Route::resource('profesor', profesorController::class);
Route::resource('aula', aulaController::class);
Route::resource('calificacion', calificacionController::class);
Route::resource('carrera', carreraController::class);
Route::resource('grupo', grupoController::class);
Route::resource('horarioalumno', horarioalumnoController::class);
Route::resource('horarioprofesor', horarioprofesorController::class);
Route::resource('inscripcion', inscripcionController::class);
Route::resource('materia', materiaController::class);
Route::resource('pagos', pagosController::class);
Route::resource('semestre', semestreController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');