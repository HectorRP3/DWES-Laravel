@extends("layout")

@section("title")
    Listar Especies
@endsection
<?php
    $count = 0;
?>
{{-- @include("navegacion") --}}
@section("contenido")
<section class="section">
    <h1>Especies</h1>
    <div>
        @isset($especies)
            @foreach($especies as $especie)
            <article>
                <h1>Especie {{++$count}}</h1>
                <h1>{{$especie->nombreCientifico}}</h1>
                <p>NombreCientifico: {{$especie->nombreCientifico}}</p>
                <p>NombreComun: {{$especie->nombreComun}}</p>
                <p>Clima: {{$especie->clima}}</p>
                <p>Crecimineto: {{$especie->crecimineto}}</p>
                <p>ImagenUrl: {{$especie->imagenUrl}}</p>
                @isset($especie->evento)
                    <p>Eventos en el que participa</p>
                    <ul>
                        @foreach ($especie->evento as $evento )
                            <li>Nombre:{{$evento->nombre}}</li>
                            <li>Cantidad de Plantado en ese evento: {{$evento->pivot->cantidad}}</li>
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
                            <li>Descripcion:{{$beneficio->descripcion}}</li>
                            <p>-----------------------------------</p>
                        @endforeach
                    </ul>
                @endisset
                @if(count($especie->beneficio) == 0)
                    <p>No hay beneficios disponibles</p>
                @endif

            </article>

            @endforeach
        @endisset
        @empty($especies)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
</section>
@endsection


