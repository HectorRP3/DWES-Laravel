
@extends("layouts.layout")
@section("title")
    Ver {{$evento->nombre}}
@endsection
@section("contenido")
<section class="section flex justify-center">
    @component('components.evento-card',['evento'=>$evento])

    @endcomponent
</section>
@endsection
