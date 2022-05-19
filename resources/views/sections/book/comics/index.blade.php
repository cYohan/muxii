@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    @include('partials.nav')

    <div class="container">
        <h1 class="text-center mb-5 text-white mt-5" style="font-size: 2em;">Comics</h1>
        @if (Auth::user())

            @if (Auth::user()->rol == 'admin')
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Sube tu cómic</a>
            @endif

        @endif
        <br>

        <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>

            @foreach ($file as $comic)
                <div class="col d-flex justify-content-evenly">

                    <div class="card border-warning border-4 bg-dark text-white mb-3" style="width: 90%">
                        <div class="card-header" style="font-size: 2em;">{{ $comic->title }}</div>
                        <br>
                        <div class="card-body">

                            <p class="card-text">{{ $comic->description }}</p>
                            <br>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Leer</a>

                        </div>
                    </div>

                </div>
            @endforeach



        </div>

    </div>
@endsection
