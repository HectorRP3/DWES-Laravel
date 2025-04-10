@extends("layouts.layout")

@section("title")
    Listar Especies
@endsection

{{-- @include("navegacion") --}}
@section("contenido")
<section class="section">
    <h1>Especies</h1>
    <div>
        @isset($especies)
            @foreach($especies as $especie)
                @component('components.especie-card',['especie'=>$especie])
                    <a href="{{route('especies.edit',$especie->id)}}" class="font-bold text-white no-underline bg-[#008000] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Editar especie</a>
                    <a href="{{route('especies.show',$especie->id)}}"class=" font-bold text-white no-underline bg-[#008000] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Ver especie</a>
                    <form method="POST" action="{{route('especies.destroy', $especie->id) }}" class="w-full"  >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="w-full font-bold text-white no-underline bg-[#008000] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Borrar especie</button>
                    </form>
                @endcomponent
            @endforeach
        @endisset
        @empty($especies)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
</section>
@endsection


