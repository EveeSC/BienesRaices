<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;
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

Route::get('/', [PropiedadController::class , 'index'])->name('propiedad.home');

Route::get('/propiedades/crear', [PropiedadController::class, 'create'])->name('propiedad.create');

Route::post('/propiedades/guardar', [PropiedadController::class, 'store'])->name('propiedad.store');

Route::get('/propiedades/editar/{id}' , [PropiedadController::class, 'editar'])->name('propiedad.editar');

Route::get('/propiedades/eliminar/{id}' , [PropiedadController::class, 'eliminar'])->name('propiedad.eliminar');

Route::put('/propiedades/actualizar/{id}', [PropiedadController::class, 'actualizar'])->name('propiedad.actualizar');

Route::get('/propiedades/destroy/{id}' , [PropiedadController::class, 'destroy'])->name('propiedad.destroy');