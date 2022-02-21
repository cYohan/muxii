@extends('layouts.app')

@section('title', $spinOff->title)

@section('content')
@include('partials.navigation')


<div class="container">
    <h1 class="text-center">{{ $spinOff->title }}</h1>

    <div class="card">

        <div class="card-body">

          <p class="card-text">{{  $spinOff->body  }}</p>
        </div>

        <img src="/img/{{ $spinOff->rute }}" class="card-img-top" alt="{{ $spinOff->title }}">
    </div>
</div>

@endsection
