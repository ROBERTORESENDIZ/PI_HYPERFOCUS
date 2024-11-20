<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class conjuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conjuntos')->insert([
            [
                'nombre' => 'Verbos en ingles',
                'descripcion' => 'Verbos regulares',
                'fecha_creacion' =>Carbon::now(),
                'created_at'=>Carbon::now()
               
            ],
            [
                'nombre' => 'Verbos en ingles',
                'descripcion' => 'Verbos irregulares',
                'fecha_creacion' =>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => 'Phrasal Verbs',
                'descripcion' => 'Verbos compuestos',
                'fecha_creacion' =>Carbon::now(),
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
