<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        // para ver la lista de servicios
        $servicios = Servicio::all();
        return view('crud_servicios', compact('servicios'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric', 
        ]);
    
        // Crear un nuevo servicio en la base de datos
        Servicio::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio, 
        ]);
    
        // Redirigir a la lista de servicios 
        return redirect()->route('servicios.registrarServicio')->with('success', 'Servicio guardado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
