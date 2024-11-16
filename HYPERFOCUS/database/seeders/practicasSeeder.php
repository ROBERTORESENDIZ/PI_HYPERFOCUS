<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class practicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('practicas')->insert([
            [
                'fecha_hora_inicio' =>Carbon::now(),
                'fecha_hora_fin' => '2023-03-16 16:51:00',
                'aciertos' => 5,
                'fallos' => 6,
                'intentos' => 11,            
            ],
            [
                'fecha_hora_inicio' =>Carbon::now(),
                'fecha_hora_fin' => '2023-07-17 16:51:00',
                'aciertos' => 15,
                'fallos' => 6,
                'intentos' => 21,
            ],
            [
                'fecha_hora_inicio' =>Carbon::now(),
                'fecha_hora_fin' => '2023-01-18 16:51:00',
                'aciertos' => 2,
                'fallos' => 2,
                'intentos' => 4,
            ]
            ]);
    }
}
