<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Especie;
use App\Http\Requests\EspeciePostRequest;
use App\Http\Requests\UpdateEspecieRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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

    public function store(EspeciePostRequest $request)
    {

        $archivoPath = null;

        if ($request->hasFile('imagenUrl')) {
            $archivoPath = $request->file('imagenUrl')->store('especies', 'public');

            $archivo = $request->file('imagenUrl');

            dump($archivo->getRealPath());
            dump(Storage::path($archivoPath));
        }
        Especie::create([
            'nombreCientifico' => $request->nombreCientifico,
            'nombreComun' => $request->nombreComun,
            'clima' => $request->clima,
            'regionOrigen' => $request->regionOrigen,
            'crecimiento' => $request->crecimiento,
            'imagenUrl' => $archivoPath,
            'enlace' => $request->enlace,
        ]);
        return redirect()->route('especies.index')->with('success', 'Especie Creado!');
    }

    public function show($id)
    {
        $beneficios = Beneficio::whereDoesntHave('especie', function ($query) use ($id) {
            $query->where('especies_id', $id);
        })->get();
        $especie = Especie::find($id);
        return view('especies.show', compact('especie', 'beneficios'));
    }
    public function edit(Especie $especie)
    {
        return view('especies.edit', compact('especie'));
    }

    public function update(Request $request, Especie $especie)
    {
        $archivoPath = null;

        if ($request->hasFile('imagenUrl')) {
            $archivoPath = $request->file('imagenUrl')->store('especies', 'public');

            $archivo = $request->file('imagenUrl');

            dump($archivo->getRealPath());
            dump(Storage::path($archivoPath));
        }
        $request->validate([
            'nombreCientifico' => [
                'required',
                Rule::unique('especies')->ignore($especie->id),
            ],
            'nombreComun' => 'required|max:50|string',
            'clima' => 'required|max:50|string',
            'regionOrigen' => 'required|max:50|string',
            'crecimiento' => 'required|max:50|string',
            'enlace' => 'nullable|url'
        ]);
        if (!$request->hasFile('imagenUrl')) {
            $archivoPath = $especie->imagenUrl;
        }
        $especie->updateOrFail([
            'nombreCientifico' => $request->nombreCientifico,
            'nombreComun' => $request->nombreComun,
            'clima' => $request->clima,
            'regionOrigen' => $request->regionOrigen,
            'crecimiento' => $request->crecimiento,
            'imagenUrl' => $archivoPath,
            'enlace' => $request->enlace,
        ]);
        return redirect()->route('especies.index')->with('success', 'Especie actualizado con exito');
    }


    public function destroy($id)
    {
        $especie = Especie::find($id);
        $especie->evento()->delete();
        $especie->beneficio()->delete();
        $especie->delete();
        return redirect()->route('especies.index')->with('success', 'Especie borrado con exito');
    }

    public function addbeneficios(Request $request, Especie $especie)
    {
        // $especie->beneficio()->sync($request->beneficio);
        foreach ($request->beneficios as $beneficio) {
            $especie->beneficio()->attach($beneficio);
        }
        return redirect()->route('especies.index')->with('success', 'Beneficio agregado a la especie con exito');
    }
}
