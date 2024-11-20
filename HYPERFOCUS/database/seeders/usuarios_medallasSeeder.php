<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;   

class usuarios_medallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTS MANUALES
        DB::table('usuarios_medallas')->insert([
            [
                'fecha' => '2023-11-15 16:51:00',
                'usuario_id'=> 1,
                'medalla_id'=> 2,
                'created_at'=>Carbon::now()
            ],
            [
                'fecha' => '2023-10-11 16:51:00',
                'usuario_id'=> 1,
                'medalla_id'=> 1,
                'created_at'=>Carbon::now()
            ],
            [
                'fecha' => '2023-01-15 16:01:00',
                'usuario_id'=> 3,
                'medalla_id'=> 1,
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
