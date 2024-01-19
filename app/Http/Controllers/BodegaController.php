<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodegas = Bodega::all();
        return view('bodegas.index', compact('bodegas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bodegas.bodegaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            // Añade aquí las validaciones para otros campos
        ]);

        Bodega::create($request->all());

        return redirect()->route('bodegas.index')->with('success', 'Bodega creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bodega $bodega)
    {
        return view('bodegas.bodega', compact('bodega'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bodega $bodega)
    {
        return view('bodegas.edit', compact('bodega'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bodega $bodega)
    {
        $request->validate([
            'nombre' => 'required|string',
            // Añade aquí las validaciones para otros campos
        ]);

        $bodega->update($request->all());

        return redirect()->route('bodegas.index')->with('success', 'Bodega actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bodega $bodega)
    {
        $bodega->delete();

        return redirect()->route('bodegas.index')->with('success', 'Bodega eliminada exitosamente');
    }
}
