<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficio;
use App\Http\Requests\BeneficioPostRequest;

class BeneficioController extends Controller
{
    //
    public function index()
    {
        $beneficios = Beneficio::all();
        return view('beneficios.index', compact('beneficios'));
    }

    public function create()
    {
        return view('beneficios.create');
    }
    public function store(BeneficioPostRequest $request)
    {
        Beneficio::create([
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('beneficios.index')->with('success', 'Beneficio creado!');
    }
    public function show($id)
    {
        $beneficio = Beneficio::find($id);
        return view('beneficios.show', compact('beneficio'));
    }
    public function edit(Beneficio $beneficio)
    {
        return view('beneficios.edit', compact('beneficio'));
    }
    public function update(BeneficioPostRequest $request, Beneficio $beneficio)
    {
        $beneficio->update([
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('beneficios.index')->with('success', 'Beneficio actualizado!');
    }

    public function destroy(Beneficio $beneficio)
    {
        $beneficio->especie()->delete();
        $beneficio->delete();
        return redirect()->route('beneficios.index')->with('success', 'Beneficio eliminado!');
    }
}
