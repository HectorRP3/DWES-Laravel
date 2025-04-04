 @csrf
<div class="mb-5 text-left">
    <label for="nombre" class="form__label">Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre del evento" class="form__control" id="nombre" value="{{old('nombre',$evento->nombre?? '')}}"/>
    <p>
        @error("nombre")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="descripcion" class="form__label">Descripcion</label>
    <input type="text" name="descripcion" placeholder="Descripcion del evento" class="form__control" id="descripcion" value="{{old('descripcion',$evento->descripcion?? '')}}"/>
    <p>
        @error("descripcion")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="ubicacion" class="form__label">Ubicacion</label>
    <input type="text" name="ubicacion" placeholder="Ubicacion del evento" class="form__control" id="ubicacion" value="{{old('ubicacion',$evento->ubicacion?? '')}}"/>
    <p>
        @error("ubicacion")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="tipoEvento" class="form__label">Tipo de Evento</label>
    <select name="tipoEvento">
        <option value="Reforestacion" {{old('tipoEvento',$evento->tipoEvento ?? '') == 'Reforestacion' ? 'selected' : ''}}>Reforestacion</option>
        <option value="Charla" {{old('tipoEvento',$evento->tipoEvento?? '') == 'Charla' ? 'selected' : ''}}>Charla</option>
        <option value="Taller" {{old('tipoEvento',$evento->tipoEvento?? '') == 'Taller' ? 'selected' : ''}}>Taller</option>
        {{-- {{-- <option value="Reforestacion">Reforestacion</option>
        <option value="Reforestacion">Reforestacion</option>
        <option value="Charla">Charla</option>
        <option value="Taller">Taller</option> --}}

    </select>
    <p>
        @error("tipoEvento")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="tipoTerreno" class="form__label">Tipo de Terreno</label>
    <select name="tipoTerreno">
        <option value="Urbano" {{old('tipoTerreno',$evento->tipoTerreno ?? '') == 'Urbano' ? 'selected' : ''}}>Urbano</option>
        <option value="Rural" {{old('tipoTerreno',$evento->tipoTerreno ?? '') == 'Rural' ? 'selected' : ''}}>Rural</option>
        <option value="Montaña" {{old('tipoTerreno',$evento->tipoTerreno ?? '') == 'Montaña' ? 'selected' : ''}}>Montaña</option>
        <option value="Playa" {{old('tipoTerreno',$evento->tipoTerreno ?? '') == 'Playa' ? 'selected' : ''}}>Playa</option>
        {{-- <option value="Urbano">Urbano</option>
        <option value="Rural">Rural</option>
        <option value="Montaña">Montaña</option>
        <option value="Playa">Playa</option> --}}
    </select>
    <p>
        @error("tipoTerreno")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="fecha" class="form__label">Fecha</label>
    <input type="date" name="fecha" placeholder="Fecha del evento" class="form__control" id="fecha" value="{{old('fecha',$evento->fecha?? '')}}"/>
    <p>
        @error("fecha")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="imagenUrl" class="form__label">Imagen</label>
    <input type="text" name="imagenUrl" placeholder="Url de la imagen" class="form__control" id="imagenUrl" value="{{old('imagenUrl',$evento->imagenUrl?? '')}}"/>
    <p>
        @error("imagenUrl")
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5 text-left">
    <label for="anfitrion_id" class="form__label">Anfitrion</label>
    <input type="number" name="anfitrion_id" placeholder="Id del anfitrion" class="form__control" id="anfitrion_id" value="{{old('anfitrion_id',$evento->anfitrion_id?? '')}}"/>
    <p>
        @error("anfitrion_id")
            {{$message}}
        @enderror
    </p>
</div>
<button type="submit" class="form__button">{{ $btnText }} evento</button>
