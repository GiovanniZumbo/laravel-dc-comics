<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view("pokemons.index", compact("pokemons"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pokemons.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $pokemon = new Pokemon();
        $pokemon->number = $formData['number'];
        $pokemon->name = $formData['name'];
        $pokemon->ability = $formData['ability'];
        $pokemon->type_1 = $formData['type_1'];
        $pokemon->type_2 = $formData['type_2'];
        $pokemon->height = $formData['height'];
        $pokemon->weight = $formData['weight'];
        $pokemon->generation = $formData['generation'];
        $pokemon->image_url = $formData['image_url'];
        $pokemon->save();

        return redirect()->route("pokemon.show", ["id" => $pokemon->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view("pokemons.show", compact("pokemon"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view("pokemons.edit", compact("pokemon"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();

        $pokemon = Pokemon::findOrFail($id);

        //Opzione 1 (Necessario per il metodo Create)
        // $pokemon->fill($formData);
        // $pokemon->save();

        //Opzione 2
        $pokemon->update($formData);

        return redirect()->route("pokemon.show", ["id" => $pokemon->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon) {}
}