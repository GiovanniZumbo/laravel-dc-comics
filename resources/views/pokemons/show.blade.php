<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex - {{ $pokemons['name'] }}</title>
</head>

<body>
    @extends('layout.app')

    @section('main-content')
        <h1 class="text-center py-3">{{ $pokemons['name'] }}</h1>

        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="{{ $pokemons['image_url'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nome </h5>
                    <p class="card-text">
                    <ul class="list-unstyled">
                        <li>Number: 00{{ $pokemons['number'] }}</li>
                        <li>Nome: {{ $pokemons['name'] }}</li>
                        <li>Type 1: {{ $pokemons['type_1'] }}</li>
                        <li>Type 2: {{ $pokemons['type_2'] }}</li>
                        <li>Ability: {{ $pokemons['ability'] }}</li>
                        <li>Height: {{ $pokemons['height'] }}</li>
                        <li>Weight: {{ $pokemons['weight'] }}</li>
                        <li>Generation: {{ $pokemons['generation'] }}</li>
                    </ul>
                    </p>
                    <a href="{{ route('pokemon.index') }}" class="btn btn-primary">Return</a>
                </div>
            </div>
        @endsection
    </div>
</body>

</html>
