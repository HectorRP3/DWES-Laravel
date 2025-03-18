@extends("layout")
@section("title")
    Listar Usuarios
@endsection

@section("contenido")
<section class="section">
    <h1>Usuarios</h1>
    <div>
        @isset($usuarios)
            @foreach($usuarios as $usuario)
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
                <ul>
                    @foreach ( $usuario->eventoParticipante as $evento )
                        <li>{{$evento->nombre}}</li>
                    @endforeach
                    @empty($usuario->eventoParticipante)
                        <p>No participa en ningun evento</p>
                    @endempty
                </ul>
                <p>Eventos que ha creado</p>
                <ul>
                    @foreach ( $usuario->eventoCrea as $evento )
                        <li>{{$evento->nombre}}</li>
                    @endforeach
                    @empty($usuario->eventoCrea)
                        <p>No tiene eventos creados</p>
                    @endempty
                </ul>

            </article>
            @endforeach
        @endisset
        @empty($usuarios)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
</section>
@endsection

