<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;   


class pioridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pioridades')->insert([
            [
                'nombre'=>'alta',
                'descripcion'=>'Pioridad alta en el algoritmo',
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' =>'media',
                'descripcion'=>'Pioridad media en el algoritmo',
                'created_at'=>Carbon::now()
                
            ],
            [
                'nombre' =>'baja',
                'descripcion'=>'Pioridad baja en el algoritmo',
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
