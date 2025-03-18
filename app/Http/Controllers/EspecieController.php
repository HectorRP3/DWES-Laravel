<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;
use App\Models\Especie;

class EspecieController extends Controller
{
    public function index()
    {
        $especies = Especie::with('evento')->with('beneficio')->get();
        return view('especies.index', compact('especies'));
        // return response()->json($especies);
    }

    public function create()
    {
        return view('especies.create');
    }
}
