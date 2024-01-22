<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vino;
use App\Models\Bodega;

class VinoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create($id_bodega)
{
    $bodegas = Bodega::all();

    $bodega = Bodega::findOrFail($id_bodega);

    return view('vinos.vinoCreate', compact('bodegas', 'id_bodega', 'bodega'));
}

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Vino::create($request->all());
        $id_bodega = $request->input('id_bodega');

        return redirect()->route('bodegas.bodega', ['bodega' => $id_bodega])->with('success', 'Vino creado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vino = Vino::findOrFail($id);

        $bodegas = Bodega::all();

        return view('vinos.edit', compact('vino', 'bodegas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'anio' => 'required|integer',
            'alcohol' => 'required|numeric',
            'tipo' => 'required|string',
            'id_bodega' => 'required|exists:bodegas,id', 
        ]);

        $vino = Vino::findOrFail($id);
        $vino->update($request->all());

        return redirect()->route('bodegas.index')->with('success', 'Vino actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vino = Vino::findOrFail($id);
        $vino->delete();

        return redirect()->back()->with('success', 'Vino eliminado exitosamente');
    }

}
