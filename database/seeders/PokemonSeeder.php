<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PokemonSeeder extends Seeder
{


    public function run(): void
    {
        $pokemon = [
            [
                'number' => 1,
                'name' => 'Bulbasaur',
                'type_1' => 'Grass',
                'type_2' => 'Poison',
                'ability' => 'Overgrow',
                'height' => 0.7, // in meters
                'weight' => 6.9, // in kg
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/bulbasaur.png'
            ],
            [
                'number' => 2,
                'name' => 'Ivysaur',
                'type_1' => 'Grass',
                'type_2' => 'Poison',
                'ability' => 'Overgrow',
                'height' => 1.0,
                'weight' => 13.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/ivysaur.png'
            ],
            [
                'number' => 3,
                'name' => 'Venusaur',
                'type_1' => 'Grass',
                'type_2' => 'Poison',
                'ability' => 'Overgrow',
                'height' => 2.0,
                'weight' => 100.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/venusaur.png'
            ],
            [
                'number' => 4,
                'name' => 'Charmander',
                'type_1' => 'Fire',
                'type_2' => null,
                'ability' => 'Blaze',
                'height' => 0.6,
                'weight' => 8.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/charmander.png'
            ],
            [
                'number' => 5,
                'name' => 'Charmeleon',
                'type_1' => 'Fire',
                'type_2' => null,
                'ability' => 'Blaze',
                'height' => 1.1,
                'weight' => 19.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/charmeleon.png'
            ],
            [
                'number' => 6,
                'name' => 'Charizard',
                'type_1' => 'Fire',
                'type_2' => 'Flying',
                'ability' => 'Blaze',
                'height' => 1.7,
                'weight' => 90.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/charizard.png'
            ],
            [
                'number' => 7,
                'name' => 'Squirtle',
                'type_1' => 'Water',
                'type_2' => null,
                'ability' => 'Torrent',
                'height' => 0.5,
                'weight' => 9.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/squirtle.png'
            ],
            [
                'number' => 8,
                'name' => 'Wartortle',
                'type_1' => 'Water',
                'type_2' => null,
                'ability' => 'Torrent',
                'height' => 1.0,
                'weight' => 22.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/wartortle.png'
            ],
            [
                'number' => 9,
                'name' => 'Blastoise',
                'type_1' => 'Water',
                'type_2' => null,
                'ability' => 'Torrent',
                'height' => 1.6,
                'weight' => 85.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/blastoise.png'
            ],
            [
                'number' => 10,
                'name' => 'Caterpie',
                'type_1' => 'Bug',
                'type_2' => null,
                'ability' => 'Shield Dust',
                'height' => 0.3,
                'weight' => 2.9,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/caterpie.png'
            ],
            [
                'number' => 11,
                'name' => 'Metapod',
                'type_1' => 'Bug',
                'type_2' => null,
                'ability' => 'Shed Skin',
                'height' => 0.7,
                'weight' => 9.9,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/metapod.png'
            ],
            [
                'number' => 12,
                'name' => 'Butterfree',
                'type_1' => 'Bug',
                'type_2' => 'Flying',
                'ability' => 'Compound Eyes',
                'height' => 1.1,
                'weight' => 32.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/butterfree.png'
            ],
            [
                'number' => 13,
                'name' => 'Weedle',
                'type_1' => 'Bug',
                'type_2' => 'Poison',
                'ability' => 'Shield Dust',
                'height' => 0.3,
                'weight' => 3.2,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/weedle.png'
            ],
            [
                'number' => 14,
                'name' => 'Kakuna',
                'type_1' => 'Bug',
                'type_2' => 'Poison',
                'ability' => 'Shed Skin',
                'height' => 0.6,
                'weight' => 10.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/kakuna.png'
            ],
            [
                'number' => 15,
                'name' => 'Beedrill',
                'type_1' => 'Bug',
                'type_2' => 'Poison',
                'ability' => 'Swarm',
                'height' => 1.0,
                'weight' => 29.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/beedrill.png'
            ],
            [
                'number' => 16,
                'name' => 'Pidgey',
                'type_1' => 'Normal',
                'type_2' => 'Flying',
                'ability' => 'Keen Eye',
                'height' => 0.3,
                'weight' => 1.8,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/pidgey.png'
            ],
            [
                'number' => 17,
                'name' => 'Pidgeotto',
                'type_1' => 'Normal',
                'type_2' => 'Flying',
                'ability' => 'Keen Eye',
                'height' => 1.1,
                'weight' => 30.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/pidgeotto.png'
            ],
            [
                'number' => 18,
                'name' => 'Pidgeot',
                'type_1' => 'Normal',
                'type_2' => 'Flying',
                'ability' => 'Keen Eye',
                'height' => 1.5,
                'weight' => 39.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/pidgeot.png'
            ],
            [
                'number' => 19,
                'name' => 'Rattata',
                'type_1' => 'Normal',
                'type_2' => null,
                'ability' => 'Run Away',
                'height' => 0.3,
                'weight' => 3.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/rattata.png'
            ],
            [
                'number' => 20,
                'name' => 'Raticate',
                'type_1' => 'Normal',
                'type_2' => null,
                'ability' => 'Run Away',
                'height' => 0.8,
                'weight' => 18.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/raticate.png'
            ],
            [
                'number' => 21,
                'name' => 'Spearow',
                'type_1' => 'Normal',
                'type_2' => 'Flying',
                'ability' => 'Keen Eye',
                'height' => 0.3,
                'weight' => 2.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/spearow.png'
            ],
            [
                'number' => 22,
                'name' => 'Fearow',
                'type_1' => 'Normal',
                'type_2' => 'Flying',
                'ability' => 'Keen Eye',
                'height' => 1.2,
                'weight' => 38.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/fearow.png'
            ],
            [
                'number' => 23,
                'name' => 'Ekans',
                'type_1' => 'Poison',
                'type_2' => null,
                'ability' => 'Intimidate',
                'height' => 2.0,
                'weight' => 6.9,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/ekans.png'
            ],
            [
                'number' => 24,
                'name' => 'Arbok',
                'type_1' => 'Poison',
                'type_2' => null,
                'ability' => 'Intimidate',
                'height' => 3.5,
                'weight' => 65.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/arbok.png'
            ],
            [
                'number' => 25,
                'name' => 'Pikachu',
                'type_1' => 'Electric',
                'type_2' => null,
                'ability' => 'Static',
                'height' => 0.4,
                'weight' => 6.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/pikachu.png'
            ],
            [
                'number' => 26,
                'name' => 'Raichu',
                'type_1' => 'Electric',
                'type_2' => null,
                'ability' => 'Static',
                'height' => 0.8,
                'weight' => 30.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/raichu.png'
            ],
            [
                'number' => 27,
                'name' => 'Sandshrew',
                'type_1' => 'Ground',
                'type_2' => null,
                'ability' => 'Sand Veil',
                'height' => 0.6,
                'weight' => 12.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/sandshrew.png'
            ],
            [
                'number' => 28,
                'name' => 'Sandslash',
                'type_1' => 'Ground',
                'type_2' => null,
                'ability' => 'Sand Veil',
                'height' => 1.0,
                'weight' => 29.5,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/sandslash.png'
            ],
            [
                'number' => 29,
                'name' => 'Nidoran♀',
                'type_1' => 'Poison',
                'type_2' => null,
                'ability' => 'Poison Point',
                'height' => 0.4,
                'weight' => 7.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/nidoran-f.png'
            ],
            [
                'number' => 30,
                'name' => 'Nidorina',
                'type_1' => 'Poison',
                'type_2' => null,
                'ability' => 'Poison Point',
                'height' => 0.8,
                'weight' => 20.0,
                'generation' => 1,
                'image_url' => 'https://img.pokemondb.net/sprites/home/normal/nidorina.png'
            ],
        ];


        foreach ($pokemon as $singlePokemon) {
            $newPokemon = new Pokemon();
            $newPokemon->number = $singlePokemon["number"];
            $newPokemon->name = $singlePokemon["name"];
            $newPokemon->type_1 = $singlePokemon["type_1"];
            $newPokemon->type_2 = $singlePokemon["type_2"];
            $newPokemon->ability = $singlePokemon["ability"];
            $newPokemon->height = $singlePokemon["height"];
            $newPokemon->weight = $singlePokemon["weight"];
            $newPokemon->generation = $singlePokemon["generation"];
            $newPokemon->image_url = $singlePokemon["image_url"];
            $newPokemon->save();
        }
    }
}
