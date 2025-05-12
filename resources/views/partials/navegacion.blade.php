<nav class="navegacion">
<div class="navegacion__title">
    <img class="navegacion__img" src="{{asset('images/fotoLogoReforesta.png')}}" alt="Logo de la pagina web reforesta"/>
    <h1>REFORESTA</h1>
</div>

    <ul class="navegacion__lista">
            {{-- <li><a  href="{{route('crear')}}">Crear Nota</a></li> --}}
            {{-- <li><a  href="{{route('listar.notas')}}">ListarNota</a></li> --}}
        {{-- <li><a href="{{ route('usuarios.index')}}">Listar Usuarios</a></li>
        <li><a href="{{ route('usuarios.create')}}">Añadir Usuarios</a></li>
        <li><a href="{{ route('eventos.index')}}">Listar Eventos</a></li>
        <li><a href="{{ route('eventos.create')}}">Añadir Eventos</a></li>
        <li><a href="{{ route('especies.index')}}">Listar Especies</a></li>
        <li><a href="{{ route('especies.create')}}">Añadir Especies</a></li> --}}
        <li>Usuarios
            <ul>
                <li><a href="{{ route('usuarios.index')}}">Listar Usuarios</a></li>
                <li><a href="{{ route('usuarios.create')}}">Añadir Usuarios</a></li>
            </ul>
        </li>
        <li>Eventos
            <ul>
                <li><a href="{{ route('eventos.index')}}">Listar Eventos</a></li>
                <li><a href="{{ route('eventos.create')}}">Añadir Eventos</a></li>
            </ul>
        </li>
        <li>Especies
            <ul>
                <li><a href="{{ route('especies.index')}}">Listar Especies</a></li>
                <li><a href="{{ route('especies.create')}}">Añadir Especies</a></li>
            </ul>
        </li>
        <li>Beneficios
            <ul>
                <li><a href="{{ route('beneficios.index')}}">Listar Beneficios</a></li>
                <li><a href="{{ route('beneficios.create')}}">Añadir Beneficios</a></li>
            </ul>
        </li>
        @if(Auth::check())
            <li><a href="{{ route("perfil")}}">{{Auth::user()->nombre}}</a></li>
            <li><a href="{{ route('logout')}}">Logout</a></li>
        @else
            <li><a href="{{ route('usuarios.showLogin')}}">LoGIN</a></li>
        @endif
     </ul>

</nav>



