@extends('layouts.app')

@section('title', 'Spin-Offs')

@section('content')
    @include('partials.nav')

    <div class="container">
        <h1 class="text-center mb-5 text-white mt-5" style="font-size: 2em;">Spin-offs</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>

            @foreach ($spinOffs as $spinOff)
                <div class="col">
                    <div class="card border-info border-4 bg-dark text-white mb-3">

                        <div class="card-body">

                            <h5 class="card-title" style="font-size: 2em;">
                                {{ $spinOff->title }}
                            </h5>
                            <br>
                            <p class="card-text">
                                {{ $spinOff->description }}
                            </p>
                            <br>
                            <a href="{{ route('spin-offs.show', $spinOff->id) }}" class="btn btn-primary">Leer</a>
                        </div>

                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection
