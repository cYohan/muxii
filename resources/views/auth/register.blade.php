@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                @include('partials.validation-errors')
                <div class="card bg-light px-4 py-2">
                    <form action="{{ route('register') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName4" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="inputName4" name="name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName4" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputFirstName4" name="first_name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName4" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="inputLastName4" name="last_name">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPasswordConfirm4" class="form-label">Confirma la contraseña</label>
                            <input type="password" class="form-control" id="inputPasswordConfirm4"
                                name="password_confirmation">
                        </div>
                        <div class="col-12">
                            <label>Avatar</label>
                            <div class="col-md-12">
                                <input type="file" name="avatar" id="avatar" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
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
        const inputElement = document.querySelector('input[id="avatar"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {
            labelIdle: `Arrastre los archivos aquí o <span class="filepond--label-action">Explore</span>`,
        });

        FilePond.setOptions({
            server: {
                url: '/upload',
                process: {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            }
        });
    </script>
@endsection
