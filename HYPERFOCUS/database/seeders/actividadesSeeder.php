<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class actividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actividades')->insert([
            [
                'nombre' => 'Ir a la escuela',
                'descripcion' => 'ir a la universidad',
                'fecha_creacion' =>Carbon::now(),
                'duracion' =>120,
                'fecha_hora_inicio'=>'2023-01-17 16:01:00',
                'fecha_hora_fin'=>'2023-01-17 18:00:00',
                'completada'=>1
            ],
            [
                'nombre' => 'Ir al super',
                'descripcion' => 'comprar todo lo necesario para mi evento del sabado',
                'fecha_creacion' =>Carbon::now(),
                'duracion' =>60,
                'fecha_hora_inicio'=>'2023-01-18 16:00:00',
                'fecha_hora_fin'=>'2023-01-18 19:01:00',
                'completada'=>0
            ],
            [
                'nombre' => 'Ir a nadar',
                'descripcion' => 'práctica habitual',
                'fecha_creacion' =>Carbon::now(),
                'duracion' => 80,
                'fecha_hora_inicio'=>'2023-01-19 16:01:00',
                'fecha_hora_fin'=>'2023-01-19 17:01:00',
                'completada'=>1
            ]
            ]);
    }
}
