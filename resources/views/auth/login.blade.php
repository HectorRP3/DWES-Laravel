@extends("layouts.layout")
@section("title")
    Login Usuarios
@endsection
@section("contenido")
<section class="section bg-green-200">
    <h1>Usuarios</h1>

    <form action="{{route('login')}}" method="POST" class="max-w-sm mx-auto border-2 border-solid border-[#008000] rounded-lg p-5">
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
            <input type="password" name="password" id="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-[#008000] hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Iniciar Sesión</button>
        @csrf
        @error('email')
            <div class="text-red-500 text-xs italic mt-2">
                {{ $message }}
            </div>
        @enderror
        @error('password')
            <div class="text-red-500 text-xs italic mt-2">
                {{ $message }}
            </div>
        @enderror
    </form>


</section>
@endsection

