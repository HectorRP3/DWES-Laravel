@extends("layouts.layout")
@section("title")
    Añadir Especies
@endsection

@section("contenido")
<section class="section bg-red-100">
    <h1>Especies</h1>
    <form action="{{route('especies.store')}}" method="POST"  class="max-w-sm mx-auto border-2 border-solid border-[#890404] rounded-lg p-5">
        @csrf
        <div class="mb-5 text-left">
            <label for="nombreCientifico" class="form__label">Nombre Cientifico</label>
            <input type="text" name="nombreCientifico" placeholder="Nombre cientifico de la especie" class="form__control" id="nombreCientifico" value="{{old('nombreCientifico')}}"/>
            <p>
                @error("nombreCientifico")
                    {{$message}}
                @enderror
            </p>
        </div>
        <div class="mb-5 text-left">
            <label for="nombreComun" class="form__label">Nombre Comun</label>
            <input type="text" name="nombreComun" placeholder="Nombre de la especie" class="form__control" id="nombreComun" value="{{old('nombreComun')}}"/>
            @error("nombreComun")
                {{$message}}
            @enderror
        </div>
        <div class="mb-5 text-left">
            <label for="clima" class="form__label">Clima</label>
            <input type="text" name="clima" placeholder="Clima de la especie" class="form__control" id="clima" value="{{old('clima')}}"/>
            @error("clima")
                {{$message}}
            @enderror
        </div>
        <div class="mb-5 text-left">
            <label for="regionOrigen" class="form__label">Region de Origen</label>
            <input type="text" name="regionOrigen" placeholder="Region de origen de la especie" class="form__control" id="regionOrigen" value="{{old('regionOrigen')}}"/>
            @error("regionOrigen")
                {{$message}}
            @enderror
        </div>
        <div class="mb-5 text-left">
            <label for="crecimiento" class="form__label">Crecimiento</label>
            <input type="number" name="crecimiento" placeholder="Crecimiento de la especie" class="form__control" id="crecimiento" value="{{old('crecimiento')}}"/>
            @error("crecimiento")
                {{$message}}
            @enderror
        </div>
        <div class="mb-5 text-left">
            <label for="imagenUrl" class="form__label">Imagen</label>
            <input type="text" name="imagenUrl" placeholder="Url de la imagen" class="form__control" id="imagenUrl" value="{{old('imagenUrl')}}"/>
            @error("imagenUrl")
                {{$message}}
            @enderror
        </div>
        <div class="mb-5 text-left">
            <label for="enlace" class="form__label">Enlace</label>
            <input type="text" name="enlace" placeholder="Enlace de la especie" class="form__control" id="enlace" value="{{old('enlace')}}"/>
            @error("enlace")
                {{$message}}
            @enderror
        </div>
        <button type="submit" class="form__button">Añadir especie</button>

    </form>
</section>
@endsection
{{--
 'NombreCientifico',
        'NombreComun',
        'Clima',
        'RegionOrigen',
        'Crecimineto',
        'ImagenUrl',
        'Enlace', --}}
