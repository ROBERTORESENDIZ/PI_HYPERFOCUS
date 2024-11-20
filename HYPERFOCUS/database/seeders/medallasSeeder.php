<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class medallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('medallas')->insert([
            [
                'nombre' => 'Racha de 3 dias',
                'descripcion' => 'cumple una racha de 3 dias realizando todas tus actividades a tiempo',
                'condicion_recompensa' => '3 dias de seguidos de actividad',
                'fecha_creacion' =>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => 'Racha de 10 dias',
                'descripcion' => 'cumple una racha de 10 dias realizando todas tus actividades a tiempo',
                'condicion_recompensa' => '10 dias de seguidos de actividad',
                'fecha_creacion' =>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => '+200 flashcards',
                'descripcion' => 'Crea 200 o más flashcards personalizadas',
                'condicion_recompensa' => '200 flashcards',
                'fecha_creacion' =>Carbon::now(),
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
