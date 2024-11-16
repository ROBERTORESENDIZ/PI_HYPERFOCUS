<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(usuarioSeeder::class);
        $this->call(rolesSeeder::class);
        $this->call(usuarios_medallasSeeder::class);
        $this->call(medallasSeeder::class);
        $this->call(concentracionSeeder::class);
        $this->call(practicasSeeder::class);
        $this->call(conjuntosSeeder::class);
        $this->call(conceptosSeeder::class);
        $this->call(actividadesSeeder::class);
        $this->call(pioridadesSeeder::class);
        $this->call(reestablecer_contraseñaSeeder::class);


        /* User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);  */
    }
}
