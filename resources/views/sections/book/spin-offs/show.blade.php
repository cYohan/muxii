@extends('layouts.app')

@section('title', 'Spin-off')

@section('content')
    @include('partials.navigation')

    <div class="container">
        @foreach ($spinOff as $file)
            @if ($file->subtype_id == 1)
                <h1 class="text-center mb-5">{{ $file->name }}</h1>

                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">

                            <p class="card-text">{{ $file->body }}</p>

                        </div>
                    </div>
            @endif
            @if ($file->subtype_id == 2)
                <div class="col-md-4">

                    <img src="/img/{{ $file->rute }}" class="img-fluid rounded-start mt-4" alt="{{ $file->name }}">

                </div>
    </div>
    @endif
    @endforeach

    </div>

@endsection
