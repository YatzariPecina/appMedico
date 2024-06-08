<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use App\Models\Paciente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agenda', function () {
    return view('agenda');
})->middleware(['auth', 'verified'])->name('agenda');
Route::resource('pacientes', PacienteController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/citas', function () {
    return view('citas');
})->middleware(['auth', 'verified'])->name('citas');

Route::get('/crud_productos', function () {
    return view('crud_productos');
})->middleware(['auth', 'verified'])->name('crud_productos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/edit_producto', function () {
    return view('edit_producto');
})->middleware(['auth', 'verified'])->name('edit_producto');

Route::get('/lista_pacientes', function () {
    return view('lista_pacientes');
})->middleware(['auth', 'verified'])->name('lista_pacientes');

Route::get('/medicos', function () {
    return view('medicos');
})->middleware(['auth', 'verified'])->name('medicos');

Route::get('/secretary_inicio', function () {
    return view('menu_secretaria');
})->middleware(['auth', 'verified'])->name('secretary_inicio');

Route::get('/pacientes', function () {
    return view('pacientes');
})->middleware(['auth', 'verified'])->name('pacientes');

Route::get('/registrarCita', function () {
    return view('registrarCita');
})->middleware(['auth', 'verified'])->name('registrarCita');

Route::get('/registrarServicio', function () {
    return view('registrarServicio');
})->middleware(['auth', 'verified'])->name('registrarServicio');

Route::get('registroPacientes', function () {
    return view('registroPacientes');
})->middleware(['auth', 'verified'])->name('registroPacientes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
