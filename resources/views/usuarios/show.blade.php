
@extends("layouts.layout")
@section("title")
    Ver {{$usuario->nombre}}
@endsection
@section("contenido")
<section class="section flex justify-center">
    @component('components.user-card',
        [
            'usuario' => $usuario,
        ]
    )
    @endcomponent
</section>
@endsection
