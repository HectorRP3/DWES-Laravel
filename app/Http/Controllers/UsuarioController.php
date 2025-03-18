<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuario;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('eventoParticipante')->with('eventoCrea')->get();
        return view('usuarios.index', compact('usuarios'));
        //return response()->json($usuarios);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $suscrito = $request->suscrito == 1 ? false : true;
        $request->validate([
            'Nick' => 'required|unique:usuarios',
            'Email' => 'required|unique:usuarios|email',
            'Nombre' => 'required',
            'Apellidos' => 'required',
            'suscrito' => 'required',
        ]);
        Usuario::create([
            'Nick' => $request->nick,
            'Nombre' => $request->nombre,
            'Apellidos' => $request->apellidos,
            'Email' => $request->email,
            'Password' => bcrypt($request->password),
            'suscrito' => $suscrito,
            'Karma' => 0
        ]);
        return redirect()->route('usuarios.index')->with('success', 'UsuariosCreado!');
    }
}
