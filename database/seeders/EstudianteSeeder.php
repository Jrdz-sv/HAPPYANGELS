<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["nombre" => "Estudiante1", "apellido" => "Apellido1"], 
            ["nombre" => "Estudiante2", "apellido" => "Apellido2"], 
            ["nombre" => "Estudiante3", "apellido" => "Apellido3"], 
        ]; 

        DB::table("estudiantes")->insert($data); 
    }
}
