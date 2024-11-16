<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('usuarios')->insert([
        [
            'nombre' => 'John Doe',
            'apellido' => 'Smith',
            'correo_electronico' => 'josecab2003@gmail.com',
            'contraseña' => 'contrasena123',
            'foto_perfil'=>'public/img/foto_perfil',
            'edad'=>12,
        ],
        [
            'nombre' => 'Jose ',
            'apellido' => 'Cabrera',
            'correo_electronico' => 'joscab2003@gmail.com',
            'contraseña' => 'contra123',
            'foto_perfil'=>'public/img/foto_perfil',
            'edad'=>21,
        ],
        [
            'nombre' => 'Ivan',
            'apellido' => 'Morales',
            'correo_electronico' => 'ivanalarana@gmail.com',
            'contraseña' => 'contrasena123',
            'foto_perfil'=>'public/img/foto_perfil',
            'edad'=>20,
        ]
        ]);
    }
}
