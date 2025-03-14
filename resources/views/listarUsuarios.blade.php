@extends("layout")
@section("title")
    Listar Usuarios
@endsection

@section("contenido")
    <h1>Usuarios</h1>
    <div>
        @isset($usuarios)
            @foreach($usuarios as $usuario)
                <h1>{{$usuario->Nombre}}</h1>
                <p>Email: {{$usuario->Email}}</p>
                <p>Apellidos: {{$usuario->Apellidos}}</p>
                @if($usuario->suscrito == 1)
                    <p>Suscrito: Si</p>
                @else
                    <p>Suscrito: No</p>
                @endif
                <p>Eventos en el que participa</p>
                <ul>
                    @foreach ( $usuario->eventoParticipante as $evento )
                        <li>{{$evento->Nombre}}</li>
                    @endforeach
                    @empty($usuario->eventoParticipante)
                        <p>No participa en ningun evento</p>
                    @endempty
                </ul>
                <p>Eventos que ha creado</p>
                <ul>
                    @foreach ( $usuario->eventoCrea as $evento )
                        <li>{{$evento->Nombre}}</li>
                    @endforeach
                    @empty($usuario->eventoCrea)
                        <p>No tiene eventos creados</p>
                    @endempty
                </ul>

            @endforeach
        @endisset
        @empty($usuarios)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
@endsection

