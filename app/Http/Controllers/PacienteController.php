<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PacienteController extends Controller
{
    public function index(): View{
        return view('pacientes', ['pacientes' => Paciente::latest()]);
    }

    public function create(): View{
        return view('registroPacientes');
    }

    public function store(StorePacienteRequest $request): RedirectResponse{
        Paciente::create($request->validated());

        return redirect()->route('pacientes.index')->withSuccess('Nuevo paciente agregado');
    } 
}
