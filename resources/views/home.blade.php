@extends('layouts.app')

@section('title', 'Muxii Web')

@section('content')
    @include('partials.nav')
    @include('partials.navigation')

    <status-list></status-list>

    <status-form></status-form>

    <img-form></img-form>

@endsection
