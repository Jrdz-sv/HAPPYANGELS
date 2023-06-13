<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EstudianteModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CursoSeeder::class, 
            GrupoSeeder::class, 
            Cursos_Grupos_Seeder::class, 
            ProfesorSeeder::class, 
            Grupos_Profesores_Seeder::class, 
            EstudianteSeeder::class, 
            InscripcionSeeder::class, 
            NotaSeeder::class, 
            RolSeeder::class
        ]); 
    }
}
