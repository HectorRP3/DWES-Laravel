
@extends("layouts.layout")
@section("title")
    Ver {{$especie->nombre}}
@endsection
@section("contenido")
<section class="section flex justify-center">
    @component('components.especie-card',['especie'=>$especie])

    @endcomponent
   <div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-green-100 to-green-50 py-8">
  <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md space-y-6">
    <h2 class="text-2xl font-semibold text-center text-green-800">
      Añadir beneficios
    </h2>

    <form action="{{ route('especies.addbeneficios', $especie->id) }}" method="POST" class="space-y-4">
      @csrf

      <!-- Lista de beneficios -->
      <div class="grid grid-cols-1 gap-3">
        @foreach ($beneficios as $beneficio)
          <label class="flex items-center gap-3 cursor-pointer select-none">
            <input
              type="checkbox"
              name="beneficios[]"
              value="{{ $beneficio->id }}"
              class="h-5 w-5 text-green-600 rounded border-gray-300 focus:ring-green-500"
            />
            <span class="text-sm text-gray-700">{{ $beneficio->descripcion }}</span>
          </label>
        @endforeach
      </div>

      <!-- Botón enviar -->
      <button
        type="submit"
        class="w-full inline-flex justify-center items-center gap-2 rounded-xl border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-md transition hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
      >
        Añadir
      </button>
    </form>
  </div>
</div>

</section>
@endsection
