<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Models\Paciente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agenda', function () {
    return view('citas.agenda');
})->middleware(['auth', 'verified'])->name('agenda');

Route::resource('pacientes', PacienteController::class)->middleware(['auth', 'verified']);

Route::resource('/medicos', MedicoController::class)->middleware(['auth', 'verified']);

Route::get('/citas', function () {
    return view('citas.citas');
})->middleware(['auth', 'verified'])->name('citas');

Route::get('/crud_productos', function () {
    return view('productos.crud_productos');
})->middleware(['auth', 'verified'])->name('crud_productos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/edit_producto', function () {
    return view('productos.edit_producto');
})->middleware(['auth', 'verified'])->name('edit_producto');

Route::get('/secretary_inicio', function () {
    return view('menu_secretaria');
})->middleware(['auth', 'verified'])->name('secretary_inicio');

Route::get('/registrarCita', function () {
    return view('citas.registrarCita');
})->middleware(['auth', 'verified'])->name('registrarCita');

Route::get('/registrarServicio', function () {
    return view('servicios.registrarServicio');
})->middleware(['auth', 'verified'])->name('registrarServicio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
