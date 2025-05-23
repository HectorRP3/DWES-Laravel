 <article>
     @if($especie->imagenUrl)
        @php
            $archivo = 'storage/'.$especie->imagenUrl;
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        @endphp

        <img src="{{asset($archivo)}}" alt="Imagen del evento" class="w-full h-48 object-cover"/>
    @endif
    <h1>{{$especie->nombreCientifico}}</h1>
    <p>NombreCientifico: {{$especie->nombreCientifico}}</p>
    <p>NombreComun: {{$especie->nombreComun}}</p>
    <p>Clima: {{$especie->clima}}</p>
    <p>Crecimineto: {{$especie->crecimiento}}</p>
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
{{$slot}}
</article>
