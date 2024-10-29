<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex - Database</title>
</head>

<body>
    @extends('layout.app')

    @section('main-content')
        <h1 class="text-center">Pokemon List</h1>

        <div class="container">
            <a href="{{ route('pokemon.create') }}" class="btn btn-success">Add Pokemon</a>

            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type 1</th>
                        <th scope="col">Type 2</th>
                        <th scope="col">Ability</th>
                        <th scope="col">Height</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Generation</th>
                        <th scope="col">Sprite</th>
                        <th scope="col">Page</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pokemons as $index => $Pokemon)
                        <tr>
                            <td>00{{ $Pokemon->number }}</td>
                            <th scope="row">{{ $Pokemon->name }}</th>
                            <td>{{ $Pokemon->type_1 }}</td>
                            <td>{{ $Pokemon->type_2 ?: '-' }}</td>
                            <td>{{ $Pokemon->ability }}</td>
                            <td>{{ $Pokemon->height }}</td>
                            <td>{{ $Pokemon->weight }}</td>
                            <td>{{ $Pokemon->generation }}</td>
                            <td>{{ $Pokemon->sprite }}</td>
                            <td><img src="{{ $Pokemon->image_url }}" alt="image"></td>
                            <td><a href="{{ route('pokemon.show', $Pokemon->id) }}" class="btn btn-success ">Details</a>
                            </td>

                        </tr>
                    @empty
                        <p>No Pokemon to show.</p>
                    @endforelse
                </tbody>
            </table>
        @endsection
    </div>
</body>

</html>
