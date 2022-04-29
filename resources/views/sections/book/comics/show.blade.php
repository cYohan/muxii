@foreach ($comic as $pages)
    @extends('layouts.app')

    @section('title', $pages->title)

    @section('content')
        @include('partials.navigation')

        <div class="container">

            <h1 class="text-center mb-5">{{ $pages->title }}</h1>

            <div class="row g-0 d-flex justify-content-center">

                <div class="col-6">

                    @foreach ($paginas as $pagina)
                        <img src="/img/{{ $pagina->carpeta }}/{{ $pagina->name }}" alt="{{ $pagina->title }}">
                    @endforeach

                </div>

            </div>

        </div>


    @endsection
@endforeach
