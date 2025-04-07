
@extends("layouts.layout")
@section("title")
    Editar beneficio
@endsection
@section("contenido")
<section class="section bg-red-100">
    <h1>Especies</h1>
    <form action="{{route('beneficios.update',$beneficio)}}" method="POST" class="max-w-sm mx-auto border-2 border-solid border-[#890404] rounded-lg p-5">
        @method('PUT')
        @include('beneficios.form',['btnText'=>'Editar'])
    </form>
</section>
@endsection

