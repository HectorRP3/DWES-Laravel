<article>
    @if($evento->imagenUrl)
        @php
            $archivo = 'storage/'.$evento->imagenUrl;
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        @endphp

        <img src="{{asset($archivo)}}" alt="Imagen del evento" class="w-full h-48 object-cover"/>
    @endif
    <h2>{{$evento->nombre}}</h2>
    <p>Descripcion: {{$evento->descripcion}}</p>
    <p>Fecha: {{$evento->fecha}}</p>
    @php
        $archivo = 'storage/'.$evento->documentoUrl;
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
    @endphp
    <a href="{{ asset($archivo) }}"
   target="_blank"
   aria-label="Abrir PDF del evento en nueva pestaña"
   class="bg-green-500 rounded-xl text-center !underline p-3 ">Link pdf </a>
    <p>Anfitrion id: {{$evento->anfitrion_id}}</p>
    <h1>Especies</h1>
    @isset($evento->especie)
        <ul>
            @foreach ($evento->especie as $espec)
                <li>Nombre Cientifico: {{$espec->nombreCientifico}}</li>
                <li>Cantidad de Plantado: {{$espec->pivot->cantidad}}</li>
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
                <li>Nombre: {{$usuario->nombre}}</li>
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
            <li>Nombre: {{$evento->usuarioCrea->nombre}}</li>
            <li>Email: {{$evento->usuarioCrea->email}}</li>
            <li>Apellidos: {{$evento->usuarioCrea->apellidos}}</li>
        </ul>
    @endisset
    @empty($evento->usuarioCrea)
        <p>No hay Usuario disponibles</p>
    @endempty
    {{$slot}}
</article>
