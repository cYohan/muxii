@extends('layouts.app')

@section('title', 'Games')

@section('content')
    @include('partials.navigation')

    <div class="container">
        <h1 class="text-center mb-5">Games</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>

            @foreach ($games as $game)
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Game</div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $game->title }}
                            </h5>
                            <p class="card-text">
                                {{ $game->description }}
                            </p>
                            <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary">¡Jugar!</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection
