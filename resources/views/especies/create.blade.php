@extends("layouts.layout")
@section("title")
    Añadir Especies
@endsection

@section("contenido")
<section class="section bg-green-200">
    <h1>Especies</h1>
    <form action="{{route('especies.store')}}" method="POST"  class="max-w-sm mx-auto border-2 border-solid border-[#008000] rounded-lg p-5">
        @include('especies.form',['btnText'=>'Crear'])
    </form>
</section>
@endsection
