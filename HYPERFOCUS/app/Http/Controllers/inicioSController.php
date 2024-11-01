<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioSController extends Controller
{
    public function iniciarsesion(Request $request)
    {
        return redirect()->route('rutahome');
    }
}
