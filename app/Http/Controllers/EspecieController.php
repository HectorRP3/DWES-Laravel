<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Especie;

class EspecieController extends Controller
{
    public function index()
    {
        $especies = Especie::with('evento')->with('beneficio')->get();
        return view('especies.index', compact('especies'));
        // return response()->json($especies);
    }

    public function create()
    {
        return view('especies.create');
    }

    public function store(Request $request)
    {
        Especie::create([
            'nombreCientifico' => $request->nombreCientifico,
            'nombreComun' => $request->nombreComun,
            'clima' => $request->clima,
            'regionOrigen' => $request->regionOrigen,
            'crecimiento' => $request->crecimiento,
            'imagenUrl' => $request->imagenUrl,
            'enlace' => $request->enlace,
        ]);
        return redirect()->route('especies.index')->with('success', 'Especie Creado!');
    }

    public function show($id)
    {
        $especie = Especie::find($id);
        return view('especies.show', compact('especie'));
    }

    public function destroy($id)
    {
        $especie = Especie::find($id);
        $especie->evento()->delete();
        $especie->beneficio()->delete();
        $especie->delete();
        return redirect()->route('especies.index')->with('success', 'Especie borrado con exito');
    }
}
