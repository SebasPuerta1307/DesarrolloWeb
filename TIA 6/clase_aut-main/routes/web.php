<?php

use App\Http\Controllers\TipoProyectoController;
use App\Http\Controllers\AsignaturaController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('docentes', App\Http\Controllers\DocenteController::class);
Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class);
Route::resource('evaluadores', App\Http\Controllers\EvaluadorController::class);

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluadorController;

Route::resource('docentes', DocenteController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('evaluadores', EvaluadorController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Rutas de CRUD
 * Todas las opciones del Menú
 */
Route::middleware(['auth'])->group(function () {
    Route::resource('tipo-proyectos', TipoProyectoController::class);
    Route::resource('asignaturas', AsignaturaController::class);
});


require __DIR__.'/auth.php';
