@extends("layouts.layout")
@section("title")
    Añadir Eventos
@endsection

@section("contenido")
<section class="section bg-red-100">
    <h1>Eventos</h1>
    <form action="{{route('eventos.store')}}" method="POST" class="max-w-sm mx-auto border-2 border-solid border-[#890404] rounded-lg p-5">
       @include('eventos.form',['btnText'=>'Añadir'])
    </form>
</section>
@endsection
