<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorBienvenida extends Controller
{
    public function vistaBienvenida($nombreUsuario)
    {
        return view('bienvenida', compact('nombreUsuario'));
    }
}
