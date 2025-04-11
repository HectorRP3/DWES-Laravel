
@extends("layouts.layout")
@section("title")
    Ver {{$especie->nombre}}
@endsection
@section("contenido")
<section class="section flex justify-center">
    @component('components.especie-card',['especie'=>$especie])

    @endcomponent
    <div class="flex flex-col justify-center items-center w-100">
        <h2 class="">Añadir beneficios</h2>
        <form action="{{route('especies.addbeneficios', $especie->id)}}" method="POST">
            @csrf
            @foreach ($beneficios as $beneficio)
                <div class="flex gap-2 justify-center items-center">
                    <input type="checkbox" name="beneficios[]" value="{{$beneficio->id}}">
                    <label for="">{{$beneficio->descripcion}}</label>
                </div>
            @endforeach
            <button type="submit" class="form__button">Añadir</button>
        </form>
    </div>
</section>
@endsection
