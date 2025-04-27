@csrf
<div class="mb-5 text-left">
    <label for="nick" class="form__label">Nick</label>
    <input type="text" placeholder="Your nickname" name="nick" class="form__control" id="nick" value="{{old('nick',$usuario->nick ?? '')}}"  />
    <p>
        @error('nick')
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5">
    <label for="nombre" class="form__label">Nombre</label>
    <input type="text"  placeholder="Your name" name="nombre" class="form__control" id="nombre" value="{{old('nombre',$usuario->nombre ?? '')}}" />
    <p>
        @error('nombre')
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5">
    <label for="apellidos" class="form__label">Apellidos</label>
    <input type="text" name="apellidos"  placeholder="Your surname" class="form__control" id="apellidos" value="{{old('apellidos',$usuario->apellidos ?? '')}}" />
        <p>
        @error('apellidos')
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5">
    <label for="email" class="form__label">Email</label>
    <input type="email" name="email"  placeholder="Your Email" class="form__control" id="email" value="{{old('email',$usuario->email ?? '')}}" />
        <p>
        @error('email')
            {{$message}}
        @enderror
    </p>
</div>
<div class="mb-5">
    <label for="password" class="form__label">Password</label>
    <input type="password" name="password"  placeholder="Your password" class="form__control" id="password" value="{{old('password',$usuario->password ?? '')}}" />
        <p>
        @error('password')
            {{$message}}
        @enderror
    </p>
</div>
<div class="flex flex-wrap mb-5">
    <input type="checkbox"  class="accent-[#890404] rounded-2xl w-4 h-4  disabled:bg-red-900 focus:bg-red-500" name="suscript" id="suscrito" value="1" {{old('suscrito',$usuario->suscrito ?? false)? 'checked':''}} />
    <label class="text-lg text-[#890404] text-left font-bold">¿Quieres suscribirte al newsletter?</label>
    @error('suscrito')
        {{$message}}
    @enderror
</div>
<div class="mb-5 text-left">
    <label for="imagenUrl" class="form__label">Imagen</label>
    <input type="file"  name="imagenUrl" placeholder="Url de la imagen" class="form__control" id="imagenUrl" value="{{old('imagenUrl',$usuario->imagenUrl?? '')}}"/>
    <p>
        @error("imagenUrl")
            {{$message}}
        @enderror
    </p>
</div>
<button type="submit" class="form__button">{{ $btnText }} usuario</button>
