<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorActividad;
use App\Http\Requests\validadorEditAct;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MiSemanaController extends Controller 
{
    
    public function index()
    {   
        // Usuario (falta consulta)
        $us = 2;

        $fecha = Carbon::now()->format('Y-m-d');

        $actividades = DB::table('actividades')
        ->join('usuarios', 'actividades.usuario_id', '=', 'usuarios.id')
        ->join('pioridades', 'actividades.pioridad_id', '=', 'pioridades.id')
        ->select( 'pioridades.nombre as prioridad','pioridades.id as idPrio', 'actividades.nombre', 'actividades.descripcion', 'actividades.fecha_inicio','actividades.hora_inicio', 'actividades.duracion', 'actividades.hora_fin', 'actividades.id')
        ->where('usuario_id', '=', $us)
        ->whereDate('fecha_inicio', '>=', $fecha)
        ->orderBy('fecha_inicio', 'asc')
        ->get();

        return view('miSemana', compact( 'actividades', 'fecha'));

    }

    public function guardarActividad(validadorActividad $request)
    {   
        // Usuario (falta consulta)
        $us = 2;

        // Hora para creacion y para created y updated
        $fechaHoraActual = Carbon::now();

        // Manejo de hora de fin contenplando la duracion de la act
        $hora = Carbon::createFromFormat('H:i', $request->input('horaInicio'));
        $minutos = intval($request->input('duracion'));
        $horaConMinutos = $hora->addMinutes($minutos);


        // Obtener la fecha y hora del inicio de la nueva actividad
        $fechaInicio = $request->input('fechaInicio');
        $horaInicio = $request->input('horaInicio');

        // Consulta de la existencia de una act a la misma hora
        $actividadExistente = DB::table('actividades')
            ->join('usuarios', 'actividades.usuario_id', '=', 'usuarios.id')
            ->whereDate('fecha_inicio', '=', $fechaInicio)
            ->where('usuario_id', '=', $us)
            ->where('hora_inicio', '=', $horaInicio) 
            ->exists();

        // Validacion de la actividad para gener el registro
            if ($actividadExistente) {
                session()->flash('ActEx','Ya existe una actividad en esa hora: ');
            } else {
                DB::table('actividades')->insert([
                    'nombre' => $request->input('nombre'),
                    'descripcion' => $request->input('descripcion'),
                    'fecha_creacion' => $fechaHoraActual,
                    'duracion' => $request->input('duracion'),
                    'fecha_inicio' => $fechaInicio,
                    'hora_inicio' => $horaInicio,
                    'fecha_fin' => $fechaInicio,
                    'hora_fin' => $horaConMinutos,
                    'completada' => 0,
                    'usuario_id' => $us,
                    'pioridad_id' => $request->input('prioridad'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                $act = $request->input('nombre');
                session()->flash('exito','La actividad: '.$act);
            }
        return redirect()->route('rutamisemana');
    }
    




    public function editarActividad(validadorEditAct $request, string $id )
    {
        // Usuario (falta consulta)
        $us = 2;

 
        

         // Consulta de la existencia de una act a la misma hora
         $actividadExistente = DB::table('actividades')
         ->join('usuarios', 'actividades.usuario_id', '=', 'usuarios.id')
         ->whereDate('fecha_inicio', '=', $request->input('fechaInicio2'))
         ->where('usuario_id', '=', $us)
         ->where('hora_inicio', '=', $request->input('horaInicio2'))
         ->when($id, function ($query, $id) {
             return $query->where('actividades.id', '!=', $id); // Excluir la actividad actual
         })
         ->exists();

     // Validacion de la actividad para gener el registro
         if ($actividadExistente) {
             session()->flash('ActEx','Ya existe una actividad en esa hora: ');
         } else {

                // Manejo de hora de fin contenplando la duracion de la act
                try {
                    // Intenta con el formato H:i
                    $hora2 = Carbon::createFromFormat('H:i', $request->input('horaInicio2'));
                } catch (\Carbon\Exceptions\InvalidFormatException $e) {
                    // Si falla, intenta con el formato H:i:s
                    $hora2 = Carbon::createFromFormat('H:i:s', $request->input('horaInicio2'));
                }
       
            $minutos2 = intval($request->input('duracion2'));
            $horaConMinutos = $hora2->addMinutes($minutos2);
            DB::table('actividades')
            ->where('id', $id)
            ->update([
                'nombre' => $request->input('nombre2'),
                'descripcion' => $request->input('descripcion2'),
                'duracion' => $request->input('duracion2'),
                'fecha_inicio' => $request->input('fechaInicio2'),
                'hora_inicio' => $request->input('horaInicio2'),
                'fecha_fin' => $request->input('fechaInicio2'),
                'hora_fin' => $horaConMinutos,
                'pioridad_id' => $request->input('prioridad2'),
                'updated_at' => Carbon::now(),
            ]);

            $act = $request->input('nombre2');
            session()->flash('exitoupdate','La actividad: '.$act);
         }
         
         return redirect()->route('rutamisemana');
    }
    

    public function eliminarActividad(string $id, string $nombre)
    {
        $consultaCliente = DB::table('actividades')
        ->where('id', $id)
        ->delete();
    
        session()->flash('exitodelete','Se elimino la actividad: '.$nombre);
        return to_route('rutamisemana');
    }


}