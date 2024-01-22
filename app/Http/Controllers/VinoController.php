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
     * Display the specified resource.
     */
    public function show(Vino $vino)
    {
        return view('vinos.vino', compact('vino'));
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
    ]);

    $vino = Vino::findOrFail($id);
    $vino->update($request->all());

    $bodegaId = $vino->id_bodega;

    return redirect()->route('bodegas.bodega', ['bodega' => $bodegaId])->with('success', 'Vino actualizado exitosamente');
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
