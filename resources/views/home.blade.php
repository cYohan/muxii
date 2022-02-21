@extends('layouts.app')

@section('title', 'Muxii')

@section('content')
@include('partials.navigation')
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <div class="card border-0 bg-light m-auto mb-3 shadow-sm col-md-8">
                <status-form></status-form>
            </div>
            <status-list></status-list>
        </div>
    </div>
</div>

@endsection
