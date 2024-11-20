<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class reestablecer_contraseñaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTS MANUALES
        DB::table('reestablecer_contraseña')->insert([
            [
                'token_reestablecimiento' => 'J112341234ef',
                'fecha_solicitud' =>Carbon::now(),
                'fecha_expiracion' => '2023-01-15 16:01:00',
                'estatus_reestablecimiento' => 1,
                'usuario_id'=> 1,
                'created_at'=>Carbon::now()
            ],
            [
                'token_reestablecimiento' => 'Joasdga89y',
                'fecha_solicitud' =>Carbon::now(),
                'fecha_expiracion' => '2023-01-15 16:01:00',
                'estatus_reestablecimiento' => 0,
                'usuario_id'=> 2,
                'created_at'=>Carbon::now()
            ],
            [
                'token_reestablecimiento' => 'Jose2707070',
                'fecha_solicitud' =>Carbon::now(),
                'fecha_expiracion' => '2023-01-15 16:01:00',
                'estatus_reestablecimiento' => 1,
                'usuario_id'=> 1,
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
