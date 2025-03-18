
@extends("layout")
@section("title")
    Añadir Usuarios
@endsection
@section("contenido")
<section class="section">
    <h1>Usuarios</h1>

    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf
        <div>
            <label for="nick" class="form__label">Nick</label>
            <input type="text" name="nick" class="form__control" id="nick" value="{{old('nick')}}">
            @error('Nick')
                {{$message}}
            @enderror
        </div>
        <div>
            <label for="nombre" class="form__label">Nombre</label>
            <input type="text" name="nombre" class="form__control" id="nombre" value="{{old('nombre')}}">
            @error('Nombre')
                {{$message}}
            @enderror
        </div>
        <div>
            <label for="apellidos" class="form__label">Apellidos</label>
            <input type="text" name="apellidos" class="form__control" id="apellidos" value="{{old('apellidos')}}">
            @error('Apellidos')
                {{$message}}
            @enderror
        </div>
        <div>
            <label for="email" class="form__label">Email</label>
            <input type="email" name="email" class="form__control" id="email" value="{{old('email')}}">
            @error('Email')
                {{$message}}
            @enderror
        </div>
        <div>
            <label for="password" class="form__label">Password</label>
            <input type="password" name="password" class="form__control" id="password" value="{{old('password')}}">
            @error('Password')
                {{$message}}
            @enderror
        </div>
        <div>
            <input type="checkbox" name="suscript" id="suscrito" value="1">
            <label>¿Quieres suscribirte al newsletter?</label>
        </div>
        <button type="submit" class="form__button">Crear Usuario</button>
    </form>
</section>
@endsection

