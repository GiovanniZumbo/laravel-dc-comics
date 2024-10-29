<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex - {{ $pokemon['name'] }}</title>
</head>

<body>
    @extends('layout.app')

    @section('main-content')
        <h1 class="text-center py-3">{{ $pokemon['name'] }}</h1>

        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="{{ $pokemon['image_url'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nome </h5>
                    <p class="card-text">
                    <ul class="list-unstyled">
                        <li>Number: 00{{ $pokemon['number'] }}</li>
                        <li>Nome: {{ $pokemon['name'] }}</li>
                        <li>Type 1: {{ $pokemon['type_1'] }}</li>
                        <li>Type 2: {{ $pokemon['type_2'] }}</li>
                        <li>Ability: {{ $pokemon['ability'] }}</li>
                        <li>Height: {{ $pokemon['height'] }}</li>
                        <li>Weight: {{ $pokemon['weight'] }}</li>
                        <li>Generation: {{ $pokemon['generation'] }}</li>
                    </ul>
                    </p>
                    <a href="{{ route('pokemon.index') }}" class="btn btn-primary">Return</a>
                </div>
            </div>
        @endsection
    </div>
</body>

</html>
