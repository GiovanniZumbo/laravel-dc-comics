<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage');
})->name("home");

Route::prefix("/pokemons")->name("pokemon.")->group(function () {
    Route::get('/', [PokemonController::class, "index"])->name("index");
    Route::get('/create', [PokemonController::class, "create"])->name("create");
    Route::post('/', [PokemonController::class, "store"])->name("store");
    Route::get('/{id}', [PokemonController::class, "show"])->name("show");
    Route::get('/{id}/edit', [PokemonController::class, "edit"])->name("edit");
    Route::put('/{id}', [PokemonController::class, "update"])->name("update");
});