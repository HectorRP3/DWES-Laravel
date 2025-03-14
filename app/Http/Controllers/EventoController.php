<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{

    public function crearEvento()
    {
        $evento = new Evento();
        $evento->Nombre = "Evento Teste";
        $evento->Descripcion = "Descripcion Teste";
        $evento->Ubicacion = "Ubicacion Teste";
        $evento->TipoEvento = "Reforestacion";
        $evento->TipoTerreno = "Urbano";
        $evento->Fecha = "2021-10-10";
        $evento->ImagenUrl = "https://www.google.com";
        $evento->save();
        return response()->json($evento);
    }

    public function listarEventos()
    {
        $eventos = Evento::with('especie')->with('usuarioParticipante')->with('usuarioCrea')->get();
        // $eventos = Evento::with(['especie' => function ($query) {
        //     $query->withPivot('Cantidad');
        //     $query->where('Cantidad', '>', 9);
        // }])->get();
        return view('listarEventos', compact('eventos'));
    }
}
