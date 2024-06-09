<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Paciente;
use Illuminate\View\View;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pacientes = Paciente::latest()->paginate(4);
        return view('pacientes.pacientes', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.registroPacientes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        //Crear el paciente
        Paciente::create($request->validated());
        //Una vez creado redirigir al index con el mensaje de paciente agregado
        return redirect()->route('pacientes.index')->withSuccess('Nuevo paciente agregado');
    }

    /**
     * Display the specified resource.
     */
    //Vista de informacion del paciente
    public function show(Paciente $paciente)
    {
        return view('pacientes.showPaciente', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //Vista para editar la informacion del paciente
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    //Modificar la info del paciente en la tabla
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->validated());

        return redirect()->route('pacientes.index')->withSuccess('Paciente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    //Borrar al paciente
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('pacientes.index')->withSuccess('Paciente eliminado');
    }
}
