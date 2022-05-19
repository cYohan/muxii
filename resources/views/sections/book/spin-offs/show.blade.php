@extends('layouts.app')

@section('title', 'Spin-off')

@section('content')
    @include('partials.nav')

    <div class="container">
        @foreach ($spinOff as $file)
            <br>

            <h1 class="text-center mb-5 text-white" style="font-size: 2em;">{{ $file->name }}</h1>

            <div class="row g-0 d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card-body">

                        <pre style="font-family: 'Times New Roman', Times, serif; font-size: 1.4em;"
                            class="card-text text-white">{{ $file->text }}</pre>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
