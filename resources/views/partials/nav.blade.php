<nav class="navbar navbar-expand-lg navbar-light navbar-socialapp">
    <div class="container">
        <a class="navbar-brand" href="/">
            MUXII
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Link</a>--}}
                {{--</li>--}}
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Entrar</a></li>
                @else
                    <li class="nav-item"><a href="{{-- {{ route('profile.index') }} --}}" class="nav-link">{{ Auth::user()->name }}</a></li>

                    <form id="logout" action="{{route('logout')}}" method="POST" class="my-auto">
                        @csrf
                        <button type="submmit" class="btn btn-outline-danger btn-sm my-auto">Cerrar sesión</button>
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
