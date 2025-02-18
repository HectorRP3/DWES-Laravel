<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuario;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = Usuario::with('eventoParticipante')->with('eventoCrea')->get();
        return view('listarUsuarios', compact('usuarios'));
        //return response()->json($usuarios);
    }

    public function crearUsuario()
    {
        $user = new Usuario();
        $user->Nick = "Usuario Test22e22";
        $user->Nombre = "Nombre Teste";
        $user->Apellidos = "Apellidos Teste";
        $user->Email = "Email Teste22222";
        $user->Password = "Password Teste";
        $user->Karma = 0;
        $user->suscrito = false;

        $user->save();
        DB::table('participantes')->insert([
            'usuarios_id' => 1,
            'eventos_id' => 1
        ]);
        return response()->json($user);
    }

    // $table->id();
    //         $table->string('Nick')->unique();
    //         $table->string('Nombre');
    //         $table->string('Apellidos');
    //         $table->string('Email')->unique();
    //         $table->string('Password');
    //         $table->integer('Karma');
    //         $table->boolean('suscrito');
    //         $table->timestamps();
    //         $table->primary(['id']);
}
