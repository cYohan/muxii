<!-- <nav class="navbar navbar-expand-lg navbar-light navbar-socialapp">
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
    <li> -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Subir
                                                </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                                                                </div> -->

    <!--  --------------------------------------  -->
    <!--
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
</nav> -->
<nav class="flex flex-nowrap justify-between  bg-black h-full">

    <div id="logo" class="my-2  mx-auto ">
        <a href="{{ route('home') }}" class="flex flex-row">
            <img src="/img/logo.png" class="mr-6 ml-2 h-12 sm:h-20" alt="Muxii Studios" />
            <img src="/img/logo-quote.png" class="mr-6 h-12 sm:h-20" />
        </a>
    </div>

    <div id="search-container" class="h-24 w-3/4 flex justify-end pr-3 items-center">
        <form class="w-full max-w-sm md:w-64 sm:w-52">
            <div class="flex items-center py-2">
                <input
                    class="appearance-none bg-[#2D2D2D] rounded-full border-none w-full text-gray-400 mr-2 py-2 px-4 leading-tight focus:outline-none"
                    type="text" placeholder="Search Muxii">
                <button class="flex-shrink-0 bg-[#2D2D2D] text-sm text-gray-400 py-2 px-2 rounded-full" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <div id="buttons-container" class="py-2 h-24 mx-1.5 flex items-center">


        <button class="btn-p" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
        </button>

        <button class="btn-p" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </button>

        <button class="btn-p" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </button>

    </div>

</nav>
