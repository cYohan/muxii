<nav class="navbar navbar-expand-lg navbar-light navbar-socialapp">
    <div class="container">
        <a class="navbar-brand" href="/">
            MUXII
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                {{-- <li class="nav-item active"> --}}
                {{-- <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a class="nav-link" href="#">Link</a> --}}
                {{-- </li> --}}
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Entrar</a></li>
                @else
                    <li>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Subir
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Qué deseas subir?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <p>

                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseText" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                Escrito
                                            </button>

                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseImg" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                Fotografía
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapseText">

                                            <status-form></status-form>

                                        </div>

                                        <!--  --------------------------------------  -->

                                        <div class="collapse" id="collapseImg">

                                            <img-form></img-form>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{-- {{ route('profile.index') }} --}}"
                            class="nav-link">{{ Auth::user()->name }}</a></li>



                    <form id="logout" action="{{ route('logout') }}" method="POST" class="my-auto">
                        @csrf
                        <button type="submmit" class="btn btn-outline-danger btn-sm my-auto">Cerrar sesión</button>
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
