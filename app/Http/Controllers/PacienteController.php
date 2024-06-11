<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Medico;
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
        return view('pacientes.registroPacientes', [
            'medicos' => Medico::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        try {
            //Crear el paciente
            Paciente::create($request->validated());
            //Una vez creado redirigir al index con el mensaje de paciente agregado
            return redirect()->route('pacientes.index')->withSuccess('Nuevo paciente agregado');
        } catch (\Exception $th) {
            return back()->withErrors(['error' => 'Hubo un error al insertar los datos. Por favor intentelo de nuevo']);
        }
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
        return view('pacientes.edit', [
            'paciente' => $paciente,
            'medicos' => Medico::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    //Modificar la info del paciente en la tabla
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        try {
            //Con un request modificar el paciente con los datos validados con el request
            $paciente->update($request->validated());
            //Redirigir a el index para visualizar el paciente
            return redirect()->route('pacientes.index')->withSuccess('Paciente actualizado');
        } catch (\Exception $th) {
            return back()->withErrors(['error' => 'Hubo un error al modificar los datos del paciente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    //Borrar al paciente
    public function destroy(Paciente $paciente)
    {
        try {
            //Eliminar el paciente de la base de datos
        $paciente->delete();

        //Redirigir a el index con success
        return redirect()->route('pacientes.index')->withSuccess('Paciente eliminado');
        } catch (\Exception $th) {
            return back()->withErrors(['error' => 'Hubo un error al eliminar al paciente']); 
        }
    }
}
