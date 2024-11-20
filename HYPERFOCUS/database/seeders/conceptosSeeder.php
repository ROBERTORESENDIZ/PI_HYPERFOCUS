<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;   

class conceptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTS MANUALES
        DB::table('conceptos')->insert([
            [
                'nombre' => 'Definicion verbos regulares',
                'definicion' => 'Terminacion ed ',
                'conjunto_id' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => 'Definicion verbos irregulares',
                'definicion' => 'Terminacion irregular',
                'conjunto_id' => 2,
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => 'Definicion Phrasal verbs',
                'definicion' => 'Verbos compuestos por mas de una palabra',
                'conjunto_id' => 3,
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
