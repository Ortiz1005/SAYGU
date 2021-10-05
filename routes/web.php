<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administradorcontroller;
use App\Http\Controllers\alumnocontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\profesorcontroller;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('user', UserController::class);
Route::resource('administrador', administradorController::class);
Route::resource('alumno', alumnoController::class);
Route::resource('profesor', profesorController::class);