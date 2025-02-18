<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;

class EspecieController extends Controller
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
        return response()->json($especie);
    }

    public function listarEspecies()
    {
        $especies = Especie::with('evento')->get();
        return response()->json($especies);
    }
}
