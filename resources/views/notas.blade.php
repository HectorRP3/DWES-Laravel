@extends("layout")
@section("title")
    Listar Notas
@endsection

@section("contenido")
    <h1>Notas</h1>
    <div>
        @isset($notas)
            @foreach($notas as $nota)
                <p>{{ $nota }}</p>
            @endforeach
        @endisset
        @empty($notas)
            <p>No hay notas disponibles</p>
        @endempty
    </div>
@endsection

