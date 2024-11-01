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
        <h1 class="text-center py-3">Add a new Pokemon!</h1>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">

                    <form method="POST" action="{{ route('pokemon.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="number" class="form-label">Pokedex Number</label>
                            <input type="number" class="form-control" id="number" name="number"
                                value="{{ old('number') }}">
                            @error('number')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ability" class="form-label">Ability</label>
                            <input type="text" class="form-control" id="ability" name="ability"
                                value="{{ old('ability') }}">
                            @error('ability')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type_1" class="form-label">Type 1</label>
                            <input type="text" class="form-control" id="type_1" name="type_1"
                                value="{{ old('type_1') }}">
                            @error('type_1')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type_2" class="form-label">Type 2</label>
                            <input type="text" class="form-control" id="type_2" name="type_2"
                                value="{{ old('type_2') }}">
                            @error('type_2')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="height" class="form-label">Height</label>
                            <input type="number" step="0.01" class="form-control" id="height" name="height"
                                value="{{ old('height') }}">
                            @error('height')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="number" step="0.01" class="form-control" id="weight" name="weight"
                                value="{{ old('weight') }}">
                            @error('weight')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="generation" class="form-label">Generation</label>
                            <input type="number" class="form-control" id="generation" name="generation"
                                value="{{ old('generation') }}">
                            @error('generation')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="image_url" name="image_url"
                                value="{{ old('image_url') }}">
                            @error('image_url')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Send</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
