<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicoRequest;
use App\Models\Medico;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medicos.medicos', ['medicos' => Medico::latest()->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicos.registroMedicos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicoRequest $request)
    {
        Medico::create($request->validated());

        return redirect()->route('medicos.index')->withSuccess('Medico agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medico $medico)
    {
        return view('medicos.showMedico', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medico $medico)
    {
        return view('medicos.editMedico', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMedicoRequest $request, Medico $medico)
    {
        $medico->update($request->validate());

        return redirect()->route('medicos.index')->withSuccess('Medico actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();

        return redirect()->route('medicos.index')->withSuccess('Medico eliminado');
    }
}
