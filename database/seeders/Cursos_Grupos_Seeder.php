<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Cursos_Grupos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            // Para curso 1
            ["idCurso" => 1, "idGrupo" => 1, "created_at" => Carbon::now()], 
            ["idCurso" => 1, "idGrupo" => 2, "created_at" => Carbon::now()], 
            ["idCurso" => 1, "idGrupo" => 3, "created_at" => Carbon::now()],
            // Para curso 2
            ["idCurso" => 2, "idGrupo" => 4, "created_at" => Carbon::now()], 
            ["idCurso" => 2, "idGrupo" => 5, "created_at" => Carbon::now()], 
            ["idCurso" => 2, "idGrupo" => 6, "created_at" => Carbon::now()], 
            // Para curso 3
            ["idCurso" => 3, "idGrupo" => 7, "created_at" => Carbon::now()], 
            ["idCurso" => 3, "idGrupo" => 8, "created_at" => Carbon::now()], 
            ["idCurso" => 3, "idGrupo" => 9, "created_at" => Carbon::now()]
        ];

        DB::table("cursos_grupos")->insert($data);
    }
}
