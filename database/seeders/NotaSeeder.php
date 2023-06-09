<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["idCurso" => 1, "idEstudiante" => 1, "nota" => 10, "descripcion" => "primera"], 
            ["idCurso" => 1, "idEstudiante" => 1, "nota" => 9, "descripcion" => "segunda"], 
            ["idCurso" => 1, "idEstudiante" => 1, "nota" => 8, "descripcion" => "tercera"], 
            ["idCurso" => 1, "idEstudiante" => 1, "nota" => 7, "descripcion" => "cuarta"], 

            ["idCurso" => 2, "idEstudiante" => 2, "nota" => 10, "descripcion" => "primera"], 
            ["idCurso" => 2, "idEstudiante" => 2, "nota" => 9, "descripcion" => "segunda"], 
            ["idCurso" => 2, "idEstudiante" => 2, "nota" => 8, "descripcion" => "tercera"], 
            ["idCurso" => 2, "idEstudiante" => 2, "nota" => 7, "descripcion" => "cuarta"],

            ["idCurso" => 3, "idEstudiante" => 3, "nota" => 10, "descripcion" => "primera"], 
            ["idCurso" => 3, "idEstudiante" => 3, "nota" => 9, "descripcion" => "segunda"], 
            ["idCurso" => 3, "idEstudiante" => 3, "nota" => 8, "descripcion" => "tercera"], 
            ["idCurso" => 3, "idEstudiante" => 3, "nota" => 7, "descripcion" => "cuarta"]

        ]; 

        DB::table("notas")->insert($data); 
    }
}
