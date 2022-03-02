@extends('layouts.app')

@section('title', $file->title)

@section('content')
    @include('partials.navigation')

    <div class="container">

        <h1 class="text-center mb-5">{{ $file->title }}</h1>

        <div class="row g-0">

            <div class="col-6">

                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        {{ $init = 0 }}
                        @foreach ($file->multimedias as $comic)
                            @if ($comic->name != 'Portada')
                                <div class="carousel-item {{ $init ? '' : 'active' }}" data-bs-interval="10000">

                                    <img src="/img/{{ $comic->rute }}" class="d-block w-100" alt="{{ $comic->name }}">

                                </div>
                                {{ $init++ }}
                            @endif
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

        </div>

    </div>


@endsection
