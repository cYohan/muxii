@extends('layouts.app')

@section('title', 'Muxii Web')

@section('content')
    @include('partials.navigation')
    <div class="container">
        <div class="row">

            <status-list></status-list>

        </div>
    </div>

@endsection
