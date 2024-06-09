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

Route::get('/registrar_producto', function () {
    return view('productos.registrar_producto');
})->middleware(['auth', 'verified'])->name('registrar_producto');

Route::get('/show_producto', function () {
    return view('productos.show_producto');
})->middleware(['auth', 'verified'])->name('show_producto');

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

Route::get('registroPacientes', function () {
    return view('registroPacientes');
})->middleware(['auth', 'verified'])->name('registroPacientes');

Route::get('/crud_Servicio', function () {
    return view('crud_servicios');
})->middleware(['auth', 'verified'])->name('crud_Servicio');

Route::get('/edit_Servicio', function () {
    return view('servicios.edit_Servicio');
})->middleware(['auth', 'verified'])->name('edit_Servicio');

Route::get('/show_Servicio', function () {
    return view('servicios.showServicio');
})->middleware(['auth', 'verified'])->name('show_Servicio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
