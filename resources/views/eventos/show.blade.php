
@extends("layouts.layout")
@section("title")
    Ver {{$evento->nombre}}
@endsection
@section("contenido")
<section class="section flex h-full flex-nowrap flex-col">
    <div class="w-full">
        @component('components.evento-card',['evento'=>$evento])

        @endcomponent
    </div>

    <div class="flex flex-col justify-center items-center w-100">
        <h2 class="">Añadir usuarios</h2>
        <form action="{{route('eventos.suscribir', $evento->id)}}" method="POST">
            @csrf
            @foreach ($usuarios as $usuario)
                <div class="flex gap-2 justify-center items-center">
                    <input type="checkbox" name="usuarios[]" value="{{$usuario->id}}">
                    <label for="">{{$usuario->nombre}}</label>
                </div>
            @endforeach
            <button type="submit" class="form__button">Añadir</button>
        </form>
        <h2 class="">Añadir especies</h2>
        <form action="{{route('eventos.addespecies', $evento->id)}}" method="POST">
            @csrf
            @foreach ($especies as $especie)
                <div class="flex gap-2 justify-center items-center">
                    <input type="checkbox" name="especies[]" value="{{$especie->id}}">
                    <label for="">{{$especie->nombreCientifico}}</label>
                </div>
            @endforeach
            <button type="submit" class="form__button">Añadir</button>
</section>
@endsection
