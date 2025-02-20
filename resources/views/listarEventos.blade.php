@extends('layout')

@section("title")
    Listar Eventos
@endsection
<?php
    $count = 0;
?>
@section("contenido")
    <h1>Eventos</h1>
    <div>
        @isset($eventos)
            @foreach($eventos as $evento)
                    <h1>Evento {{++$count}}</h1>
                    <h2>{{$evento->Nombre}}</h2>
                    <p>Descripcion: {{$evento->Descripcion}}</p>
                    <p>Fecha: {{$evento->Fecha}}</p>
                    <p>ImagenUrl: {{$evento->ImagenUrl}}</p>
                    <p>Anfitrion id: {{$evento->anfitrion_id}}</p>
                    <h1>Especies</h1>
                    @isset($evento->especie)
                        <ul>
                            @foreach ($evento->especie as $espec)
                                <li>Nombre Cientifico: {{$espec->NombreCientifico}}</li>
                                <li>Cantidad de Plantado: {{$espec->pivot->Cantidad}}</li>
                                <p>-----------------------------------</p>
                            @endforeach
                        </ul>
                    @endisset
                    @if(count($evento->especie) == 0)
                        <p>No hay Especies disponibles</p>
                    @endif
                    <h1>Usuarios Participantes</h1>
                    @isset($evento->usuarioParticipante)
                        <ul>
                            @foreach ($evento->usuarioParticipante as $usuario)
                                <li>Nombre: {{$usuario->Nombre}}</li>
                                <p>-----------------------------------</p>
                            @endforeach
                        </ul>
                    @endisset
                    @if(count($evento->usuarioParticipante) == 0)
                        <p>No hay Usuarios disponibles</p>
                    @endif
                    <h1>Usuario Anfitrion</h1>
                    @isset($evento->usuarioCrea)
                        <ul>
                            <li>Nombre: {{$evento->usuarioCrea->Nombre}}</li>
                            <li>Email: {{$evento->usuarioCrea->Email}}</li>
                            <li>Apellidos: {{$evento->usuarioCrea->Apellidos}}</li>
                        </ul>
                    @endisset
                    @empty($evento->usuarioCrea)
                        <p>No hay Usuario disponibles</p>
                    @endempty
            @endforeach
        @endisset
        @empty($eventos)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
@endsection
