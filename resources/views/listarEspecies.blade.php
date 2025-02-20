@extends("layout")
@section("title")
    Listar Especies
@endsection
<?php
    $count = 0;
?>
@section("contenido")
    <h1>Especies</h1>
    <div>
        @isset($especies)
            @foreach($especies as $especie)
                <h1>Especie {{++$count}}</h1>
                <h1>{{$especie->NombreCientifico}}</h1>
                <p>NombreCientifico: {{$especie->NombreCientifico}}</p>
                <p>NombreComun: {{$especie->NombreComun}}</p>
                <p>Clima: {{$especie->Clima}}</p>
                <p>Crecimineto: {{$especie->Crecimineto}}</p>
                <p>ImagenUrl: {{$especie->ImagenUrl}}</p>
                @isset($especie->evento)
                    <p>Eventos en el que participa</p>
                    <ul>
                        @foreach ($especie->evento as $evento )
                            <li>Nombre:{{$evento->Nombre}}</li>
                            <li>Cantidad de Plantado en ese evento: {{$evento->pivot->Cantidad}}</li>
                            <p>-----------------------------------</p>
                        @endforeach
                    </ul>
                @endisset
                @if(count($especie->evento) == 0)
                    <p>No hay Eventos disponibles</p>
                @endif
                @isset($especie->beneficio)
                    <p>Beneficios que tiene la especie</p>
                    <ul>
                        @foreach ($especie->beneficio as $beneficio )
                            <li>Descripcion:{{$beneficio->Descripcion}}</li>
                            <p>-----------------------------------</p>
                        @endforeach
                    </ul>
                @endisset
                @if(count($especie->beneficio) == 0)
                    <p>No hay beneficios disponibles</p>
                @endif

            @endforeach
        @endisset
        @empty($especies)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
@endsection

