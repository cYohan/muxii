<!-- <div class="position-fixed top-40 end-0">
    <ul class="nav justify-content-center flex-column">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('book') }}">Books</a>
        </li>
    </ul>
</div> -->



<div class="flex flex-nowrap">
    @include('partials.sidebar')
    @include('partials.h-content')

    <!-- Aquí vamos a mostrar el contenido del card seleccionado -->
    <aside class="w-12" id="visualize-card" aria-label="Sidebar">

        <div class="overflow-y-auto py-4 px-3 bg-transparent h-full">

        </div>
    </aside>
</div>

<div class="position-fixed top-40 end-0">
    <ul class="nav justify-content-center flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('book') }}">Books</a>
        </li>
    </ul>
</div>
