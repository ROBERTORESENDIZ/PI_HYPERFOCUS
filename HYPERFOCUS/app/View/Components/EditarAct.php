<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditarAct extends Component
{
    public $id;
    public $nombre;
    public $prioridad;
    public $fechaIn;
    public $fecha;
    public $horaInicio;
    public $duracion;
    public $descripcion;

    public function __construct($id,$nombre,$prioridad,$fecha,$fechaIn,$horaInicio,$duracion,$descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->prioridad = $prioridad;
        $this->fechaIn = $fechaIn;
        $this->fecha = $fecha;
        $this->horaInicio = $horaInicio;
        $this->duracion = $duracion;
        $this->descripcion = $descripcion;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editar-act');
    }
}
