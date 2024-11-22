<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class planes extends Component
{
    /**
     * Create a new component instance.
     */

        public $encabezado;
        public $punto1;
        public $punto2;
        public $punto3;
        public $precio;
    public function __construct($encabezado,$punto1,$punto2,$punto3,$precio)
    {
        $this->encabezado = $encabezado;
        $this->punto1 = $punto1;
        $this->punto2 = $punto2;
        $this->punto3 = $punto3;
        $this->precio = $precio;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.planes');
    }
}
