<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutoridadRequest extends FormRequest
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
            'nombre' => ['string','max:200'],
            'info' => ['string','max:500'],
            'cargo_id' => ['required'],
            'twitter' => ['max:200'],
            'instagram' => ['max:200'],
            'email' => ['max:200'],
            'facebook' => ['max:200'],
            'imagen' => ['image']
        ];
    }
}
