
@extends("layouts.layout")
@section("title")
    Editar evento
@endsection
@section("contenido")
<section class="section bg-red-100">
    <h1>Eventos</h1>
    <form action="{{route('eventos.update',$evento )}}" method="POST" class="max-w-sm mx-auto border-2 border-solid border-[#890404] rounded-lg p-5">
        @method('PUT')
        @include('eventos.form',['btnText'=>'Editar'])
    </form>
</section>
@endsection

