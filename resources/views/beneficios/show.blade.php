
@extends("layouts.layout")
@section("title")
    Ver Beneficio
@endsection
@section("contenido")
<section class="section flex justify-center">
    @component('components.beneficio-card',['beneficio'=>$beneficio])

    @endcomponent
</section>
@endsection
