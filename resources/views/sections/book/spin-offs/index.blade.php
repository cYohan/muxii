@extends('layouts.app')

@section('title', 'Spin-offs')

@section('content')
@include('partials.navigation')

<div class="container">
    <h1 class="text-center">Spin-offs</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4" data-masonry='{"percentPosition": true }'>

            @foreach ($spinOffs as $spinOff )
                <div class="col">
                    <div class="m-1 card">

                            <img src="/img/{{$spinOff->rute}}" alt="{{ $spinOff->title }}" class="card-img-top">

                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $spinOff->title }}
                                </h5>
                                <a href="{{ route('spin-offs.show', $spinOff->id) }}" class="btn btn-primary">Leer</a>
                            </div>

                    </div>
                </div>
            @endforeach


    </div>

</div>
@endsection
