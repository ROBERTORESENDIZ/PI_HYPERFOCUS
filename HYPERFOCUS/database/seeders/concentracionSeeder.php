<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class concentracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTS MANUALES
        DB::table('concentracion')->insert([
            [
                'fecha_hora_realizacion' =>Carbon::now(),
                'tiempo_destinado' => 20,
                'cant_intervalos_concentracion' => 2,
                'tiempo_intervalos_concentracion' =>5 ,
                'cant_intervalos_descanso' => 2,
                'tiempo_intervalos_descanso' => 5,
                'usuario_id' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'fecha_hora_realizacion' =>Carbon::now(),
                'tiempo_destinado' => 14,
                'cant_intervalos_concentracion' => 2,
                'tiempo_intervalos_concentracion' => 5,
                'cant_intervalos_descanso' => 2,
                'tiempo_intervalos_descanso' => 2,
                'usuario_id' => 2,
                'created_at'=>Carbon::now()
            ],
            [
                'fecha_hora_realizacion' =>Carbon::now(),
                'tiempo_destinado' => 20,
                'cant_intervalos_concentracion' => 2,
                'tiempo_intervalos_concentracion' => 8,
                'cant_intervalos_descanso' => 2,
                'tiempo_intervalos_descanso' =>2,
                'usuario_id' => 3,
                'created_at'=>Carbon::now()
            ]
            ]);
        
    }
}
