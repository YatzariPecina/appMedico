<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitaRequest;
use App\Http\Requests\UpdateCitaRequest;
use App\Models\Cita;
use App\Models\Medico;
use App\Models\Paciente;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('citas.citas', ['citas' => Cita::latest()->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citas.registrarCita', [
            'pacientes' => Paciente::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCitaRequest $request)
    {
        try {
            Cita::create($request->validate());
            return redirect()->route('citas.index')->withSuccess('Cita crada correctamente');
        } catch (\Exception $th) {
            return back()->withErrors(['error' => 'Hubo un problema al crear la cita. Por favor intentelo de nuevo']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        return view('citas.showCita', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCitaRequest $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
