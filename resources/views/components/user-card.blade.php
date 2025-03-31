<article>
        <h1>{{$usuario->nombre}}</h1>
        <p>Email: {{$usuario->email}}</p>
        <p>Apellidos: {{$usuario->apellidos}}</p>
        <p>Karma: {{$usuario->karma}}</p>
        @if($usuario->suscrito == 1)
            <p>Suscrito: Si</p>
        @else
            <p>Suscrito: No</p>
        @endif
        <p>Eventos en el que participa</p>
        <ul class="list-none p-1.5">
            @foreach ( $usuario->eventoParticipante as $evento )
                <li class="p-1.5">{{$evento->nombre}}</li>
            @endforeach
            @empty($usuario->eventoParticipante)
                <p>No participa en ningun evento</p>
            @endempty
        </ul>
        <p>Eventos que ha creado</p>
        <ul class="list-none p-1.5">
            @foreach ( $usuario->eventoCrea as $evento )
                <li class="p-1.5">{{$evento->nombre}}</li>
            @endforeach
            @empty($usuario->eventoCrea)
                <p>No tiene eventos creados</p>
            @endempty
        </ul>
        {{$slot}}
    </article>
