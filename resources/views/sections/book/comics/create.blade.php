@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    @include('partials.navigation')

    <div class="container">

        <h1 class="text-center mb-5">¡Sube tu cómic!</h1>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-light px-4 py-2">
                    <form action="{{ route('upload.comic') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName4" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="inputEmail4" name="title">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Descripción</label>
                            <textarea class="form-control border-0" name="description" id="description" cols="5" rows="5"
                                :placeholder="`Escribe una desciripción para tu cómic!`"></textarea>
                        </div>

                        <input type="hidden" value="portada_tms.png" name="portada">

                        <div class="col-md-12">

                            <input type="file" id="pages" name="pagina">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Subir cómic</button>
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

        const inputElement = document.querySelector('input[id="pages"');

        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
            server: {
                url: '/upload/comic',
                process: {
                    headers: {
                        'X-CSRF-TOKEN': '{{ CSRF_TOKEN() }}'
                    }
                }
            }
        });
    </script>

@endsection
