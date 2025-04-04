@extends('layouts.layout')

@section("title")
    Listar Eventos
@endsection
@php
    $count = 0;
@endphp
@section("contenido")
<section class="section">
    <h1>Eventos</h1>
    <div>
        @isset($eventos)
            @foreach($eventos as $evento)
                @component('components.evento-card',['evento'=>$evento])
                    <a href="{{route('eventos.edit',$evento->id)}}" class="font-bold text-white no-underline bg-[#890404] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Editar evento</a>
                    <a href="{{route('eventos.show',$evento->id)}}" class="font-bold text-white no-underline bg-[#890404] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Ver evento</a>
                    <form method="POST" action="{{route('eventos.destroy', $evento->id) }}" class="w-full"  >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="w-full font-bold text-white no-underline bg-[#890404] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Borrar Eventos</button>
                    </form>
                 @endcomponent
            @endforeach
        @endisset
        @empty($eventos)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
</section>
@endsection
