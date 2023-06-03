<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Datos de prueba para Curso
        $data = [
            ["codigo" => "TDSV", "nombre" => "Tec Desarrollo Virtual"], 
            ["codigo" => "TRIV", "nombre" => "Tec Redes Virtual"], 
            ["codigo" => "TMHV", "nombre" => "Tec Mantenimiento Virtual"]
        ]; 

        DB::table("cursos")->insert($data); 
    }
}
