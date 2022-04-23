@extends('layouts.app')

@section('title', $game->name)

@section('content')
    @include('partials.navigation')

    <div class="container">
        <h1 class="text-center mb-5">{{ $game->name }}</h1>

        <div class="row g-0">
            <embed src="{{ $game->rute }}" height="500px">
        </div>


    </div>
@endsection
