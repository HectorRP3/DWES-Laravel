<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioPostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuario;
use App\Models\Evento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('eventoParticipante')->with('eventoCrea')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(UsuarioPostRequest $request)
    {
        $suscrito = $request->suscrito == 1 ? false : true;
        Usuario::create([
            'nick' => $request->nick,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'suscrito' => $suscrito,
            'karma' => 0
        ]);
        return redirect()->route('usuarios.index')->with('success', 'UsuariosCreado!');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $suscrito = $request->suscrito == 1 ? false : true;
        $request->validate([
            'nick' => ['required', Rule::unique('usuarios')->ignore($usuario->id)],
            'email' => ['required', Rule::unique('usuarios')->ignore($usuario->id)],
            'suscrito' => 'boolean',
            'karma' => 'integer',
            'nombre' => 'required|max:50|string',
            'apellidos' => 'required|max:100|string',
            'password' => 'nullable|min:8|string',
        ]);
        $usuario->update([
            'nick' => $request->nick,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'suscrito' => $suscrito,
        ]);
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con exito');
    }


    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->eventoParticipante()->delete();
        $usuario->eventoCrea()->delete();
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario borrado con exito');
    }
}
