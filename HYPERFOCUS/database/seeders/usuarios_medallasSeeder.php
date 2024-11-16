<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarios_medallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('usuarios_medallas')->insert([
            [
                'fecha' => '2023-11-15 16:51:00',
            ],
            [
                'fecha' => '2023-10-11 16:51:00',
            ],
            [
                'fecha' => '2023-01-15 16:01:00',
            ]
            ]);
    }
}
