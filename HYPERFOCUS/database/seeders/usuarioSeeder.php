<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;   

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTS MANUALES
        DB::table('usuarios')->insert([
        [
            'nombre' => 'John Doe',
            'apellido' => 'Smith',
            'correo_electronico' => 'josecab2003@gmail.com',
            'contraseña' => 'contrasena123',
            'foto_perfil'=>'public/img/foto_perfil',
            'edad'=>19,
            'rol_id'=>1,
            'created_at'=>Carbon::now()
        ],
        [
            'nombre' => 'Jose ',
            'apellido' => 'Cabrera',
            'correo_electronico' => 'joscab2003@gmail.com',
            'contraseña' => 'contra123',
            'foto_perfil'=>'public/img/foto_perfil',
            'edad'=>21,
            'rol_id'=>2,
            'created_at'=>Carbon::now()
        ],
        [
            'nombre' => 'Ivan',
            'apellido' => 'Morales',
            'correo_electronico' => 'ivanalarana@gmail.com',
            'contraseña' => 'contrasena123',
            'foto_perfil'=>'public/img/foto_perfil',
            'edad'=>20,
            'rol_id'=>3,
            'created_at'=>Carbon::now()
        ]
        ]);
    }
}
