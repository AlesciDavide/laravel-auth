<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'nome' => ['required', 'min:2', 'max:254'],
            'linguaggio_utilizzato' => ['required', 'min:1', 'max:254'],
            'url_repo' => ['url', 'nullable'],
        ];
    }
    /* messaggi di errore */
    public function messages(){

        return [
        'nome' => 'Devi inserire un nome valido!',
        'linguaggio_utilizzato' => 'Devi inserire un linguaggio valido tra 1 e 250 caratteri!',
        'url_repo.url' => 'Devi inserire un url valido!',
        ];

}
}
