<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;
use App\Models\Evento;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ControllerInsert extends Controller
{
    public function crearEspecie()
    {
        $especie = new Especie();
        $especie->NombreCientifico = "Especie Teste";
        $especie->NombreComun = "Nombre Comun Teste";
        $especie->Clima = "Clima Teste";
        $especie->RegionOrigen = "Region Origen Teste";
        $especie->Crecimineto = 0;
        $especie->ImagenUrl = "https://www.google.com";
        $especie->Enlace = "https://www.google.com";
        $especie->save();

        $especie = new Especie();
        $especie->NombreCientifico = "Especie Teste 2";
        $especie->NombreComun = "Nombre Comun Teste 2";
        $especie->Clima = "Clima Teste 2";
        $especie->RegionOrigen = "Region Origen Teste 2";
        $especie->Crecimineto = 0;
        $especie->ImagenUrl = "https://www.google.com";
        $especie->Enlace = "https://www.google.com";
        $especie->save();

        $especie = new Especie();
        $especie->NombreCientifico = "Especie Teste 3";
        $especie->NombreComun = "Nombre Comun Teste 3";
        $especie->Clima = "Clima Teste 3";
        $especie->RegionOrigen = "Region Origen Teste 3";
        $especie->Crecimineto = 0;
        $especie->ImagenUrl = "https://www.google.com";
        $especie->Enlace = "https://www.google.com";
        $especie->save();




        return response()->json($especie);
    }
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
        $evento->usuarioCrea()->associate(Usuario::findorFail(1));
        $evento->save();

        $evento = new Evento();
        $evento->Nombre = "Evento Teste 2";
        $evento->Descripcion = "Descripcion Teste 2";
        $evento->Ubicacion = "Ubicacion Teste 2";
        $evento->TipoEvento = "Charla";
        $evento->TipoTerreno = "Rural";
        $evento->Fecha = "2021-10-10";
        $evento->ImagenUrl = "https://www.google.com";
        $evento->usuarioCrea()->associate(Usuario::find(1));
        $evento->save();

        $evento = new Evento();
        $evento->Nombre = "Evento Teste 3";
        $evento->Descripcion = "Descripcion Teste 3";
        $evento->Ubicacion = "Ubicacion Teste 3";
        $evento->TipoEvento = "Taller";
        $evento->TipoTerreno = "Montaña";
        $evento->Fecha = "2021-10-10";
        $evento->ImagenUrl = "https://www.google.com";
        $evento->usuarioCrea()->associate(Usuario::find(3));
        $evento->save();



        return response()->json($evento);
    }

    public function crearUsuario()
    {
        $user = new Usuario();
        $user->Nick = "Usuario 1";
        $user->Nombre = "Nombre 1";
        $user->Apellidos = "Apellidos 1";
        $user->Email = "Email 1";
        $user->Password = "Password 1";
        $user->Karma = 0;
        $user->suscrito = false;
        $user->save();
        $user = new Usuario();
        $user->Nick = "Usuario 2";
        $user->Nombre = "Nombre 2";
        $user->Apellidos = "Apellidos 2";
        $user->Email = "Email 2";
        $user->Password = "Password 2";
        $user->Karma = 0;
        $user->suscrito = false;
        $user->save();
        $user = new Usuario();
        $user->Nick = "Usuario 3";
        $user->Nombre = "Nombre 3";
        $user->Apellidos = "Apellidos 3";
        $user->Email = "Email 3";
        $user->Password = "Password 3";
        $user->Karma = 0;
        $user->suscrito = false;
        $user->save();





        return response()->json($user);
    }

    public function listarUsuarios2()
    {
        DB::table('participantes')->insert([
            'usuarios_id' => 1,
            'eventos_id' => 1
        ]);

        DB::table('participantes')->insert([
            'usuarios_id' => 2,
            'eventos_id' => 1
        ]);
        DB::table('participantes')->insert([
            'usuarios_id' => 3,
            'eventos_id' => 1
        ]);

        DB::table('participantes')->insert([
            'usuarios_id' => 1,
            'eventos_id' => 2
        ]);

        DB::table('participantes')->insert([
            'usuarios_id' => 2,
            'eventos_id' => 2
        ]);

        DB::table('eventos_especies')->insert([
            'eventos_id' => 1,
            'especies_id' => 1,
            'cantidad' => 10
        ]);

        DB::table('eventos_especies')->insert([
            'eventos_id' => 2,
            'especies_id' => 2,
            'cantidad' => 10
        ]);

        DB::table('eventos_especies')->insert([
            'eventos_id' => 3,
            'especies_id' => 3,
            'cantidad' => 10
        ]);

        DB::table('eventos_especies')->insert([
            'eventos_id' => 1,
            'especies_id' => 2,
            'cantidad' => 10
        ]);

        DB::table('eventos_especies')->insert([
            'eventos_id' => 2,
            'especies_id' => 3,
            'cantidad' => 10
        ]);
    }

    public function allFuntions()
    {
        $this->crearUsuario();
        $this->crearEvento();
        $this->crearEspecie();
        $this->listarUsuarios2();
        return response()->json("All functions executed");
    }
}
