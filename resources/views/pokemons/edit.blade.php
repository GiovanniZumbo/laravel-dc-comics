<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a new pokemon</title>
</head>

<body>
    @extends('layout.app')

    @section('main-content')
        <h1 class="text-center py-3">Editing {{ $pokemon->name }} page</h1>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">

                    <form method="POST" action="{{ route('pokemon.update', $pokemon->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="number" class="form-label">Pokedex Number</label>
                            <input type="number" class="form-control" id="number" name="number"
                                value="{{ $pokemon->number }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $pokemon->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="ability" class="form-label">Ability</label>
                            <input type="text" class="form-control" id="ability" name="ability"
                                value="{{ $pokemon->ability }}">
                        </div>
                        <div class="mb-3">
                            <label for="type_1" class="form-label">Type 1</label>
                            <input type="text" class="form-control" id="type_1" name="type_1"
                                value="{{ $pokemon->type_1 }}">
                        </div>
                        <div class="mb-3">
                            <label for="type_2" class="form-label">Type 2</label>
                            <input type="text" class="form-control" id="type_2" name="type_2"
                                value="{{ $pokemon->type_2 }}">
                        </div>
                        <div class="mb-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="number" class="form-control" id="height" name="height"
                                value="{{ $pokemon->height }}">
                        </div>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="number" class="form-control" id="weight" name="weight"
                                value="{{ $pokemon->weight }}">
                        </div>
                        <div class="mb-3">
                            <label for="generation" class="form-label">Generation</label>
                            <input type="number" class="form-control" id="generation" name="generation"
                                value="{{ $pokemon->generation }}">
                        </div>
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="image_url" name="image_url"
                                value="{{ $pokemon->image_url }}">
                        </div>

                        <button type="submit" class="btn btn-success">Edit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
