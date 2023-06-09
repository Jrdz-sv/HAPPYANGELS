<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["nombre" => "Profesor1", "apellido" => "Apellido1"], 
            ["nombre" => "Profesor2", "apellido" => "Apellido2"], 
            ["nombre" => "Profesor3", "apellido" => "Apellido3"]
        ];

        DB::table("profesores")->insert($data); 
    }
}
