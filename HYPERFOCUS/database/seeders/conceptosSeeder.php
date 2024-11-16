<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class conceptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conceptos')->insert([
            [
                'nombre' => 'Definicion verbos regulares',
                'definicion' => 'Terminacion ed ',
               
            ],
            [
                'nombre' => 'Definicion verbos irregulares',
                'definicion' => 'Terminacion irregular',
            ],
            [
                'nombre' => 'Definicion Phrasal verbs',
                'definicion' => 'Verbos compuestos por mas de una palabra',
            ]
            ]);
    }
}
