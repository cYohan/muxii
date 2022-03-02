@extends('layouts.app')

@section('title', 'Book')

@section('content')
    @include('partials.navigation')

    <div class="container">
        <h1 class="text-center">COMIC</h1>
        <a href="{{ route('spin-offs') }}" class="btn btn-outline-primary">Spin-offs</a>
        <a href="{{ route('games') }}" class="btn btn-outline-primary">Games</a>
        <a href="{{ route('comics') }}" class="btn btn-outline-primary">Comics</a>
    </div>

@endsection
