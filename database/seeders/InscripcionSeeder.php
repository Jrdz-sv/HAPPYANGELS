<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["idGrupo" => 1, "idEstudiante" => 1], 
            ["idGrupo" => 2, "idEstudiante" => 2], 
            ["idGrupo" => 3, "idEstudiante" => 3]
        ]; 

        DB::table("inscripciones")->insert($data);
    }
}
