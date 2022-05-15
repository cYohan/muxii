@foreach ($comic as $pages)
    @extends('layouts.app')

    @section('title', $pages->title)

    @section('style')

        <style>
            @media (max-width: 550px) {
                .col-6 {
                    width: 100%;
                }

                .row,
                .container {
                    padding: 0;
                }
            }

        </style>

    @endsection

    @section('content')
        @include('partials.nav')

        <div class="container mt-5">


            <h1 class="text-center mb-5 text-white" style="font-size: 2em;">{{ $pages->title }}</h1>

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
