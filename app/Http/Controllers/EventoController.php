<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Http\Requests\EventoPostRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;

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

    public function store(EventoPostRequest $request)
    {
        $archivoPath = null;

        if ($request->hasFile('imagenUrl')) {
            $archivoPath = $request->file('imagenUrl')->store('eventos', 'public');
        }
        $archivoPath2 = null;
        if ($request->hasFile('documentoUrl')) {
            $archivoPath2 = $request->file('documentoUrl')->store('eventos', 'public');
        }

        Evento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ubicacion' => $request->ubicacion,
            'tipoEvento' => $request->tipoEvento,
            'tipoTerreno' => $request->tipoTerreno,
            'fecha' => $request->fecha,
            'imagenUrl' => $archivoPath,
            'documentoUrl' => $archivoPath2,
            'anfitrion_id' => $request->anfitrion_id,
        ]);
        return redirect()->route('eventos.index')->with('success', 'Evento Creado!');
    }

    public function show($id)
    {
        $evento = Evento::find($id);
        $usuarios = Usuario::whereDoesntHave('eventoParticipante', function ($query) use ($id) {
            $query->where('eventos_id', $id);
        })->get();
        $especies = Especie::whereDoesntHave('evento', function ($query) use ($id) {
            $query->where('eventos_id', $id);
        })->get();
        return view('eventos.show', compact('evento', 'usuarios', 'especies'));
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }

    public function update(EventoPostRequest $request, Evento $evento)
    {
        $archivoPath = null;
        $archivoPath2 = null;

        if ($request->hasFile('imagenUrl')) {
            $archivoPath = $request->file('imagenUrl')->store('eventos', 'public');

            $archivo = $request->file('imagenUrl');

            // dump($archivo->getRealPath());
            // dump(Storage::path($archivoPath));
        }
        if ($request->hasFile('documentoUrl')) {
            $archivoPath2 = $request->file('documentoUrl')->store('eventos', 'public');

            $archivo = $request->file('documentoUrl');

            // dump($archivo->getRealPath());
            // dump(Storage::path($archivoPath2));
        }
        if ($evento->documentoUrl == null) {
            $archivoPath2 = $evento->documentoUrl;
        }
        if ($archivoPath == null) {
            $archivoPath = $evento->imagenUrl;
        }
        $evento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'ubicacion' => $request->ubicacion,
            'tipoEvento' => $request->tipoEvento,
            'tipoTerreno' => $request->tipoTerreno,
            'fecha' => $request->fecha,
            'imagenUrl' => $archivoPath,
            'documentoUrl' => $archivoPath2,
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

    public function addUser(Request $request, Evento $evento)
    {
        $usuarios = $request->usuarios;
        $evento->usuarioParticipante()->syncWithoutDetaching($usuarios);
        return redirect()->route('eventos.index')->with('success', 'Usuario(s) suscrito(s) al evento con exito');
    }

    public function addespecies(Request $request, Evento $evento)
    {
        $especies = $request->especies;
        $cantidad = 10;
        foreach ($especies as $especie) {
            $evento->especie()->attach($especie, ['Cantidad' => $cantidad]);
        }
        // $evento->especie()->sync($especies, false);
        return redirect()->route('eventos.index')->with('success', 'Especie(s) añadida(s) al evento con exito');
    }
}
