<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::with('especie')->with('usuarioParticipante')->with('usuarioCrea')->get();
        // $eventos = Evento::with(['especie' => function ($query) {
        //     $query->withPivot('Cantidad');
        //     $query->where('Cantidad', '>', 9);
        // }])->get();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        Evento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ubicacion' => $request->ubicacion,
            'tipoEvento' => $request->tipoEvento,
            'tipoTerreno' => $request->tipoTerreno,
            'fecha' => $request->fecha,
            'imagenUrl' => $request->imagenUrl,
            'anfitrion_id' => $request->anfitrion_id,
        ]);
        return redirect()->route('eventos.index')->with('success', 'Evento Creado!');
    }

    public function show($id)
    {
        $evento = Evento::find($id);
        return view('eventos.show', compact('evento'));
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }

    public function update(Request $request, Evento $evento)
    {
        $evento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ubicacion' => $request->ubicacion,
            'tipoEvento' => $request->tipoEvento,
            'tipoTerreno' => $request->tipoTerreno,
            'fecha' => $request->fecha,
            'imagenUrl' => $request->imagenUrl,
            'anfitrion_id' => $request->anfitrion_id,
        ]);
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado con exito');
    }

    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->usuarioCrea()->delete();
        $evento->especie()->delete();
        $evento->usuarioParticipante()->delete();
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento borrado con exito');
    }
}
