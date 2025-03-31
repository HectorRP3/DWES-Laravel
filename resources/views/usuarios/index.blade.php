@extends("layouts.layout")
@section("title")
    Listar Usuarios
@endsection

@section("contenido")
<section class="section bg-yellow-300">
    <h1>Usuarios</h1>
    <div>
        @isset($usuarios)
            @foreach($usuarios as $usuario)
            @component('components.user-card',
                [
                    'usuario' => $usuario,
                ]
            )
                <a href="{{route('usuarios.edit',$usuario->id)}}" class="font-bold text-white no-underline bg-[#890404] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Editar usuario</a>
                <a href="{{route('usuarios.show',$usuario->id)}}" class="font-bold text-white no-underline bg-[#890404] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Ver usuario</a>
                <form method="POST" action="{{route('usuarios.destroy', $usuario->id) }}" class="w-full"  >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="w-full font-bold text-white no-underline bg-[#890404] p-2 rounded-lg text-center hover:bg-white hover:text-[#890404] hover:border-red hover:border-solid">Borrar usuarios</button>
                </form>
            @endcomponent
            @endforeach
        @endisset
        @empty($usuarios)
            <p>No hay Usuarios disponibles</p>
        @endempty
    </div>
</section>
@endsection

