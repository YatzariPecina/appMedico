<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PacienteController extends Controller
{
    public function index(): View{
        return view('pacientes');
    }

    public function create(): View{
        return view('registrarCita');
    }

    //public function store() 
}
