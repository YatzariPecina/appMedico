<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CitasController extends Controller
{
    public function index(): View
    {
        return view('rol_secretaria.citas', ['citas' => Citas::latest()]);
    }
}
