<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            ],
            [
                'nombre' =>'media',
                'descripcion'=>'Pioridad media en el algoritmo',
                
            ],
            [
                'nombre' =>'baja',
                'descripcion'=>'Pioridad baja en el algoritmo',
            ]
            ]);
    }
}
