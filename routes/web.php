<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/secretary_inicio', function () {
    return view('menu_secretaria');
})->middleware(['auth', 'verified'])->name('secretary_inicio');

Route::get('/crud_productos', function () {
    return view('crud_productos');
})->middleware(['auth', 'verified'])->name('crud_productos');

Route::get('/edit_producto', function () {
    return view('edit_producto');
})->middleware(['auth', 'verified'])->name('edit_producto');

Route::get('/agenda', function () {
    return view('agenda');
})->middleware(['auth', 'verified'])->name('agenda');

Route::get('/lista_pacientes', function () {
    return view('lista_pacientes');
})->middleware(['auth', 'verified'])->name('lista_pacientes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
