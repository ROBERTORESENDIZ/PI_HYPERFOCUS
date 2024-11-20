<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class controladorHome extends Controller
{
    public function vistaHome(){
        //Obtencion de la fecha
        // $fechaHoy = now()->toDateString();

        //Obtención fecha con formato
        // $fechaHoy = now()->format('d/m/Y');
        $fechaHoy = Carbon::now()->format('d/m/Y');

        //Obtención de nombre del día
        // $nombreDia = now()->locale('es')->dayName;
        $nombreDia = Carbon::now()->locale('es')->dayName;

        $totalActD = 5;
        $totalActS =10;
        $actD = ["Actividad 1", "Actividad 2","Actividad 3","Actividad 4" ,"Actividad 5"];

        return view('home',compact('totalActD','actD','totalActS','fechaHoy','nombreDia' ));
    }


    public function guardarProgreso(){
        session()->flash('progresoGC');

        return redirect()->route('rutahome');
    }
}
