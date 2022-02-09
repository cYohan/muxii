@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column justify-content-center mt-5">
        <h1 class="text-center">MUXII</h1>
        <a href="{{ route('home') }}" class="btn btn-outline-primary w-50 mx-auto mt-5">GET STARTED</a>
    </div>
@endsection
