<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;   

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTS MANUALES
        DB::table('roles')->insert([
            [
                'nombre' => 'usuario',
                'descripcion' => 'Usuario Basico',
                'privilegios' => 'Usos limitados',
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => 'usuariopremium',
                'descripcion' => 'Usuario de pago ,acceso total como usuario',
                'privilegios' => 'Uso total',
                'created_at'=>Carbon::now()
            ],
            [
                'nombre' => 'administrador',
                'descripcion' => 'Verifica el funcionamiento',
                'privilegios' => 'Acceso total al sistema',
                'created_at'=>Carbon::now()
            ]
            ]);
    }
}
