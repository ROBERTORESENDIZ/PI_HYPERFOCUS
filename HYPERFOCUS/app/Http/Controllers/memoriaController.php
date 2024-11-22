<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class memoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaConjunto= DB::table('conjuntos')->get();
        return view('memoria', compact('consultaConjunto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('memoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('conjuntos')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha_creacion' =>Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $conjunto= $request->input('nombre');
        session()->flash('guardar','El conjunto '.$conjunto.' ha sido creado correctamente');
        return to_route('rutamemoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $conjunto= DB::table('conjuntos')->where('id',$id)->first();

        // DB::table('conjuntos')
        // ->where('id',$id)
        // ->delete();

        // session()->flash('eliminar' .  $conjunto->nombre  .'El conjunto ha sido eliminado correctamente');
        // return to_route('rutamemoria');
    }
}
