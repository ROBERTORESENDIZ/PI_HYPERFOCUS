<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogrosController extends Controller
{
    public function mostrarLogros()
    {
        // Datos simulados
        $logros = [
            'medallas' => 5,
            'racha_concentracion' => 10, // En días
            'progreso_mensual' => [20, 12, 50, 81, 56, 90, 90]
        ];

        return view('misLogros', compact('logros'));
    }
}
