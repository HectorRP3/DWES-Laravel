
@extends("layouts.layout")
@section("title")
    Añadir Usuarios
@endsection
@section("contenido")
<section class="section bg-red-100">
    <h1>Usuarios</h1>

    <form action="{{route('usuarios.store')}}" method="POST" class="max-w-sm mx-auto border-2 border-solid border-[#890404] rounded-lg p-5">
        @include('usuarios.form',['btnText'=>'Añadir'])
    </form>


</section>
@endsection

