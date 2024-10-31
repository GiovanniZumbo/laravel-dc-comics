<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "number" => "required|numeric|min:0",
            "name" => "required|string|min_digits:3",
            "ability" => "required|string|min_digits:3",
            "type_1" => "required|string|min_digits:3",
            "type_2" => "string|min_digits:3",
            "height" => "required|decimal:2|min:0",
            "weight" => "required|decimal:2|min:0",
            "generation" => "required|numeric|min:0",
            "image_url" => "required|url",
        ];
    }

    public function messages(): array
    {
        return [
            //!Required
            "number.required" => "Il numero di registrazione nel Pokédex è obbligatorio.",
            "name.required" => "Il nome è obbligatorio.",
            "ability.required" => "L'abilità è obbligatoria.",
            "type_1.required" => "Il pokemon deve avere almeno un tipo.",
            "height.required" => "L'altezza è obbligatoria.",
            "weight.required" => "Il peso è obbligatorio.",
            "generation.required" => "La generazione di appartenenza è obbligatoria.",
            "image_url.required" => "Immagine: Devi inserire un link valido.",

            //@Generics
            "string" => "Il valore inserito non è valido. Devi inserire solo lettere.",
            "min_digits" => "Devono essere presenti almeno 3 caratteri.",

        ];
    }
}
