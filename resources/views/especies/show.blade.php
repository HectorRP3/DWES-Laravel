
@extends("layouts.layout")
@section("title")
    Ver {{$especie->nombre}}
@endsection
@section("contenido")
<section class="section flex justify-center">
    @component('components.especie-card',['especie'=>$especie])

    @endcomponent
</section>
@endsection
