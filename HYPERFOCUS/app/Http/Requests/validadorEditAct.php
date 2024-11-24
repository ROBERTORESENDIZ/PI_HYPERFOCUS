<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorEditAct extends FormRequest
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
            'nombre2' => 'required|max:15|string',
            'prioridad2' => 'required',
            'fechaInicio2' => 'required',
            'horaInicio2' => 'required',
            'duracion2' => 'required||integer|min:1',
            'descripcion2' => 'required',
        ];
    }
}
