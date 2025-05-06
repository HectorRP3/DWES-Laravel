
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

    <div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-sky-100 to-sky-50 py-8">
  <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-lg space-y-10">
    <section class="space-y-6">
      <h2 class="text-2xl font-semibold text-center text-sky-800">Añadir usuarios</h2>
      <form action="{{ route('eventos.suscribir', $evento->id) }}" method="POST" class="space-y-4">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          @foreach ($usuarios as $usuario)
            <label class="flex items-center gap-3 bg-sky-50 rounded-xl p-3 hover:bg-sky-100 transition">
              <input type="checkbox" name="usuarios[]" value="{{ $usuario->id }}" class="accent-sky-600 h-5 w-5">
              <span class="text-sky-900 text-sm font-medium">{{ $usuario->nombre }}</span>
            </label>
          @endforeach
        </div>
        <button type="submit" class="w-full py-2 rounded-xl bg-sky-600 text-white font-semibold hover:bg-sky-700 transition">Añadir</button>
      </form>
    </section>

    <div class="border-t border-sky-200"></div>

    <section class="space-y-6">
      <h2 class="text-2xl font-semibold text-center text-emerald-800">Añadir especies</h2>
      <form action="{{ route('eventos.addespecies', $evento->id) }}" method="POST" class="space-y-4">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          @foreach ($especies as $especie)
            <label class="flex items-center gap-3 bg-emerald-50 rounded-xl p-3 hover:bg-emerald-100 transition">
              <input type="checkbox" name="especies[]" value="{{ $especie->id }}" class="accent-emerald-600 h-5 w-5">
              <span class="text-emerald-900 text-sm font-medium">{{ $especie->nombreCientifico }}</span>
            </label>
          @endforeach
        </div>
        <button type="submit" class="w-full py-2 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700 transition">Añadir</button>
      </form>
    </section>
  </div>
</div>

</section>
@endsection
