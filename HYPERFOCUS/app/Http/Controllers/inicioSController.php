<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorIS;
use App\Http\Requests\validadorR;

class inicioSController extends Controller
{
    public function iniciarsesion(validadorIS $request)
    {
        return redirect()->route('rutahome');
    }

    public function registrarse(validadorR $request)
    {
        return redirect()->route('rutahome');
    }
}

