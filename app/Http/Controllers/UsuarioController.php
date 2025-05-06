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
use Illuminate\Support\Facades\Auth;

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
        $archivoPath = null;
        if ($request->hasFile('imagenUrl')) {
            $archivoPath = $request->file('imagenUrl')->store('usuarios', 'public');
        }
        Usuario::create([
            'nick' => $request->nick,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'suscrito' => $suscrito,
            'imagenUrl' => $archivoPath,
            'karma' => 0,
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
        if ($request->hasFile('imagenUrl')) {
            $archivoPath = $request->file('imagenUrl')->store('usuarios', 'public');
        }
        if ($usuario->imagenUrl == null) {
            $archivoPath = $usuario->imagenUrl;
        }
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
            'imagenUrl' => $archivoPath,
        ]);
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con exito');
    }


    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return redirect()->route('usuarios.index')->with('error', 'Usuario no encontrado');
        }
        // $usuario->eventoParticipante()->detach();
        // $usuario->eventoCrea()->delete();
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario borrado con exito');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/perfil')->with('success', 'Bienvenido');
        }

        return back()->with(['email' => 'Usuarios o contraseña incorrectos'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success', 'Has cerrado sesión');
    }
    public function perfil()
    {
        $usuario = Auth::user();
        return view('usuarios.show', compact('usuario'));
    }
}
