@extends("layouts.layout")
@section("title")
    Añadir Beneficio
@endsection

@section("contenido")
<section class="section bg-red-100">
    <h1>Beneficios</h1>
    <form action="{{route('beneficios.store')}}" method="POST"  class="max-w-sm mx-auto border-2 border-solid border-[#890404] rounded-lg p-5">
        @include('beneficios.form',['btnText'=>'Crear'])
    </form>
</section>
@endsection
