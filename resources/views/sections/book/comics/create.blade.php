@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    @include('partials.navigation')

    <div class="container">

        <h1 class="text-center mb-5">¡Sube tu cómic!</h1>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-light px-4 py-2">

                    <form class="row g-3" method="post" action="{{ route('comic.store') }}">

                        @csrf

                        <div class="col-md-12">
                            <label for="inputName4" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="inputTitle" name="title">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Descripción</label>
                            <textarea class="form-control border-0" name="description" id="description" cols="5" rows="5"></textarea>
                        </div>

                        <div class="col-12">
                            <label>¡Sube tu cómic!</label>
                            <div class="col-md-12">
                                <input type="file" name="comic[]" max-file="4" allow-multiple="true" class="mt-2"
                                    id="comic">
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary">Subir cómic</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
        );

        // Get a reference to the file input element
        const inputElement = document.querySelector('input[id="comic"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {
            labelIdle: `Arrastre los archivos aquí o <span class="filepond--label-action">Explore</span>`,
        });

        FilePond.setOptions({
            instantUpload: false,
        })
    </script>

@endsection
