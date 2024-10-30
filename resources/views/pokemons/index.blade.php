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
        <h1 class="text-center py-3">Pokemon List</h1>

        <div class="container">
            <a href="{{ route('pokemon.create') }}" class="btn btn-success mb-3">Add Pokemon</a>

            <table class="table table-hover align-middle">
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
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pokemons as $index => $Pokemon)
                        <tr>
                            <td align="center">{{ $Pokemon->number }}</td>
                            <th scope="row" align="center">{{ $Pokemon->name }}</th>
                            <td align="center">{{ $Pokemon->type_1 }}</td>
                            <td align="center">{{ $Pokemon->type_2 ?: '-' }}</td>
                            <td align="center">{{ $Pokemon->ability }}</td>
                            <td align="center">{{ $Pokemon->height }}</td>
                            <td align="center">{{ $Pokemon->weight }}</td>
                            <td align="center">{{ $Pokemon->generation }}</td>
                            <td align="center">{{ $Pokemon->sprite }}</td>
                            <td align="center"><img src="{{ $Pokemon->image_url }}" alt="image"></td>
                            <td align="center"><a href="{{ route('pokemon.show', $Pokemon->id) }}"
                                    class="btn btn-success ">Details</a>
                            </td>
                            <td align="center"><a href="{{ route('pokemon.edit', $Pokemon->id) }}"
                                    class="btn btn-warning ">Edit</a>
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
