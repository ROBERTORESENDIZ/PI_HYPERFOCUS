<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roles')->insert([
            [
                'nombre' => 'usuario',
                'descripcion' => 'usuario normal ',
                'privilegios' => 'usos limitados',
               
            ],
            [
                'nombre' => 'usuarioPremium',
                'descripcion' => 'usuario de pago ,acceso total como usuario',
                'privilegios' => 'uso total',
            ],
            [
                'nombre' => 'administrador',
                'descripcion' => 'verifica el funcionamiento',
                'privilegios' => 'acceso total al sistema',
            ]
            ]);
    }
}
