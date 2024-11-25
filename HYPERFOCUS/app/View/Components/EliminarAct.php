<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EliminarAct extends Component
{
    public $id;
    public $nombre;
    public function __construct($id,$nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.eliminar-act');
    }
}
