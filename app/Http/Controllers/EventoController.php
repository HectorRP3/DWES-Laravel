<?php

namespace App\Http\Controllers;

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
}
