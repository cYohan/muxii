@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    @include('partials.navigation')

    <div class="container">
        <h1 class="text-center mb-5">Comics</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>

            <!--


        <div class="col">

                                <div class="card bg-dark text-white">
                                    <img src="/img/..." class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">
                                            ...
                                        </h5>
                                        <p class="card-text">
                                            ...
                                        </p>

                                        <a href="..." class="btn btn-primary">Leer</a>

                                    </div>
                                </div>

                            </div>


                        -->

            <a href="{{ route('comics.create') }}" class="btn btn-primary">Sube tu cómic</a>

        </div>

    </div>
@endsection
