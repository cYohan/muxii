@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    @include('partials.navigation')

    <div class="container">
        <h1 class="text-center mb-5">Comics</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>


            <div class="col">

                <div class="card bg-dark text-white">
                    <img src="/img/{{ $portada->rute }}" class="card-img" alt="{{ $portada->name }}">
                    <div class="card-img-overlay">
                        <h5 class="card-title">
                            {{ $comic->title }}
                        </h5>
                        <p class="card-text">
                            {{ $comic->description }}
                        </p>

                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Leer</a>

                    </div>
                </div>

            </div>



        </div>

    </div>
@endsection
