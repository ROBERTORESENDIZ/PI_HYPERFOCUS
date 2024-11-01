<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorR extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:10',
            'apellido' => 'required|string|max:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }
}

