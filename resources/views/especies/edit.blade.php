
@extends("layouts.layout")
@section("title")
    Editar especies
@endsection
@section("contenido")
<section class="section bg-red-100">
    <h1>Especies</h1>
    <form action="{{route('especies.update',$especie)}}" method="POST" class="max-w-sm mx-auto border-2 border-solid border-[#008000] rounded-lg p-5">
        @method('PUT')
        @include('especies.form',['btnText'=>'Editar'])
    </form>
</section>
@endsection

