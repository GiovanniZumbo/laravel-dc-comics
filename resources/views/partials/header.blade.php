<header>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid ">
            <img src="https://teusterra.github.io/pokedex/images/pokedexpx.png" alt="" width="20">
            <a class="navbar-brand" href="{{ route('home') }}">Pokedex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pokemon.index') }}">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pokemon.create') }}">Add Pokemon</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
