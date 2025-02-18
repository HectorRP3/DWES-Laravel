<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use Illuminate\Http\RedirectResponse;


class NotaController extends Controller
{
    public function crearNota(Request $request)
    {
        $nota = new Nota();
        $nota->titulo = "Titulo Nota Insertada Programáticamente";
        $nota->contenido = "Contenido de la nota insertada programáticamente";
        $nota->save();

        return redirect('/')->with('success', 'Nota creada exitosamente');
    }
    public function listarNotas()
    {
        $notas = Nota::all();
        return view('notas', compact('notas'));
    }

    public function index()
    {
        $notas = Nota::all();
        return view('notas', compact('notas'));
    }

    public function show($id)
    {
        $notas = Nota::find($id);
        return "Titulo: " . $notas->titulo . " Contenido: " . $notas->contenido;
    }

    public function create()
    {
        $nota = new Nota();
        $nota->titulo = "Titulo Nota Insertada Programáticamente";
        $nota->contenido = "Contenido de la nota insertada programáticamente";
        $nota->save();
        return redirect('/')->with('success', 'Nota creada exitosamente');
    }

    public function edit($id)
    {
        $nota = Nota::find($id);
        $nota->titulo = "Nota Actualizada";
        $nota->contenido = "Contenido de la nota actualizada";
        $nota->save();
        return redirect('/')->with('success', 'Nota creada exitosamente');
    }

    public function destroy($id)
    {
        $nota = Nota::find($id);
        $nota->delete();
        return redirect('/')->with('success', 'Nota eliminada exitosamente');
    }
}
