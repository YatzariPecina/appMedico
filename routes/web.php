<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicioController;

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
Route::resource('/citas', CitaController::class)->middleware(['auth', 'verified']);

Route::get('crud_servicios', [ServicioController::class, 'index'])->name('crud_servicios');

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

Route::get('/registrarServicio', function () {
    return view('servicios.registrarServicio');
})->middleware(['auth', 'verified'])->name('registrarServicio');

Route::get('/crud_servicios', function () {
    return view('crud_servicios');
})->middleware(['auth', 'verified'])->name('crud_servicios');

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
