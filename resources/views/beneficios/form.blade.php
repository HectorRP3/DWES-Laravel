@csrf
<div class="mb-5 text-left">
    <label for="descripcion" class="form__label">Beneficio</label>
    <input type="text" name="descripcion" placeholder="Description" class="form__control" id="descripcion" value="{{old('descripcion',$beneficio->descripcion?? '')}}"/>
    <p>
        @error("descripcion")
            {{$message}}
        @enderror
    </p>
</div>

<button type="submit" class="form__button">{{ $btnText }} beneficio</button>
