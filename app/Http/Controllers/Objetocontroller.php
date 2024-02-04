<?php
// app/Http/Controllers/ObjetoController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;
use App\Models\Proveedor;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objetos = Objeto::all();
        return view('objetos.IndexObjetos', compact('objetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('objetos.CreateObjeto', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'peso' => 'required|integer',
            'numero_de_serie' => 'required|integer',
            'provedor_id' => 'required|exists:proveedores,id',
        ]);

        Objeto::create($request->all());

        return redirect()->route('objetos.index')->with('success', 'Objeto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $objeto = Objeto::findOrFail($id);
        return view('objetos.ShowObjeto', compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $objeto = Objeto::findOrFail($id);
        $proveedores = Proveedor::all();
        return view('objetos.EditObjeto', compact('objeto', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'peso' => 'required|integer',
            'numero_de_serie' => 'required|integer',
            'provedor_id' => 'required|exists:proveedores,id',
        ]);

        $objeto = Objeto::findOrFail($id);
        $objeto->update($request->all());

        return redirect()->route('objetos.index')->with('success', 'Objeto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $objeto = Objeto::findOrFail($id);
        $objeto->delete();

        return redirect()->route('objetos.index')->with('success', 'Objeto eliminado exitosamente');
    }
}
