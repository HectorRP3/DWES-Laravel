<?php

use App\Http\Controllers\ControllerInsert;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\prueba;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/hola', function () {
    return 'Hello world';
});

Route::get('/crear-nota', [NotaController::class, 'crearNota'])->name("crear");

Route::get('/saludo/{nombre?}/{id?}', function ($nombre = 'Invitado', $id = 0) {
    return 'Saludos ' . $nombre . ' tu id es ' . $id;
});

Route::get('/listar-notas', [NotaController::class, 'listarNotas'])->name("listar.notas");

// Route::resource('/notas', NotaController::class);

Route::get('/notas/destroy/{id}', [NotaController::class, 'destroy'])->name("destroy");

Route::get('/notas/{id}/edit', [NotaController::class, 'edit'])->name("edit");

Route::get('/notas', [NotaController::class, 'index'])->name("notas");

Route::get('/notas/{id}', [NotaController::class, 'show'])->name("show");



Route::get('/evento', [EventoController::class, 'crearEvento'])->name("evento");

Route::get('/usuario', [UsuarioController::class, 'crearUsuario'])->name("usuario");

Route::get('/especie', [EspecieController::class, 'crearEspecie'])->name("especie");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/listar-usuarios', [UsuarioController::class, 'listarUsuarios'])->name("listar.usuarios");

Route::get('/listar-eventos', [EventoController::class, 'listarEventos'])->name("listar.eventos");

Route::get('/listar-especies', [EspecieController::class, 'listarEspecies'])->name("listar.especies");


Route::get('/insert', [ControllerInsert::class, 'allFuntions'])->name("insert");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
