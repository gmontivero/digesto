<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaRequest extends FormRequest
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
            'titulo' => ['required','string','max:200'],
            'encabezado' => ['required','string','max:500'],
            'cuerpo' => ['required'],
            'fecha' => ['date', 'required'],
            'foto' => ['image']
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => __('El Campo Titutlo es requerido')
        ];
    }
}
