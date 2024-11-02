<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiSemanaController extends Controller 
{
    private $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
    
    // Datos de ejemplo 
    private $actividades = [
        [
            'id' => 1,
            'nombre' => 'Estudiar Laravel',
            'duracion' => 60,
            'prioridad' => 'Alta',
            'dia' => 'Lunes',
            'hora_inicio' => '09:00'
        ],
        [
            'id' => 2,
            'nombre' => 'Ejercicio',
            'duracion' => 30,
            'prioridad' => 'Media',
            'dia' => 'Martes',
            'hora_inicio' => '07:00'
        ]
    ];

    private $tiemposLibres = [
        [
            'id' => 1,
            'dia' => 'Lunes',
            'desde' => '12:00',
            'hasta' => '14:00'
        ]
    ];

    private $tiemposOcupados = [
        [
            'id' => 1,
            'dia' => 'Lunes',
            'desde' => '09:00',
            'hasta' => '11:00'
        ]
    ];

    public function index()
    {
        return view('miSemana', [
            'dias' => $this->dias,
            'actividades' => $this->actividades,
            'tiemposLibres' => $this->tiemposLibres,
            'tiemposOcupados' => $this->tiemposOcupados
        ]);
    }

    public function guardarActividad(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'duracion' => 'required|integer|min:1',
            'prioridad' => 'required|in:Alta,Media,Baja'
        ]);

        return redirect()->route('rutamisemana')->with('success', 'Actividad guardada exitosamente');
    }

    public function eliminarActividad($id)
    {
        return redirect()->route('rutamisemana')->with('success', 'Actividad eliminada exitosamente');
    }

    public function guardarTiempo(Request $request, $tipo)
    {
        $request->validate([
            'desde' => 'required',
            'hasta' => 'required'
        ]);

        return redirect()->route('rutamisemana')
            ->with('success', 'Tiempo ' . $tipo . ' guardado exitosamente');
    }
}