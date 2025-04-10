@extends("layouts.layout")

@section("title")
    Listar Beneficios
@endsection

{{-- @include("navegacion") --}}
@section("contenido")
<section class="section">
    <h1>Especies</h1>
    <div>
        @isset($beneficios)
            @foreach($beneficios as $beneficio)
                @component('components.beneficio-card',['beneficio'=>$beneficio])
                    <a href="{{route('beneficios.edit',$beneficio->id)}}" class="font-bold text-white no-underline bg-[#008000] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Editar beneficio</a>
                    <a href="{{route('beneficios.show',$beneficio->id)}}"class=" font-bold text-white no-underline bg-[#008000] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Ver beneficio</a>
                    <form method="POST" action="{{route('beneficios.destroy', $beneficio->id) }}" class="w-full"  >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="w-full font-bold text-white no-underline bg-[#008000] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Borrar beneficio</button>
                    </form>
                @endcomponent
            @endforeach
        @endisset
        @empty($beneficios)
            <p>No hay beneficios disponibles</p>
        @endempty
    </div>
</section>
@endsection


