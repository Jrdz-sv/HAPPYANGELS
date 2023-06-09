<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Grupos_Profesores_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            //Grupo - Profesor

            //Para curso 1 
            ["idGrupo" => 1, "idProfesor" => 1], 
            ["idGrupo" => 2, "idProfesor" => 2], 
            ["idGrupo" => 3, "idProfesor" => 3]

            // //Para curso 2
            // ["idGrupo" => 1, "idProfesor" => 1], 
            // ["idGrupo" => 2, "idProfesor" => 2], 
            // ["idGrupo" => 3, "idProfesor" => 3],

            // //Para curso 3
            // ["idGrupo" => 1, "idProfesor" => 1], 
            // ["idGrupo" => 2, "idProfesor" => 2], 
            // ["idGrupo" => 3, "idProfesor" => 3],
        ]; 

        DB::table("grupos_profesores")->insert($data); 
    }
}
