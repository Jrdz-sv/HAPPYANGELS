<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            // Para curso 1
            ["codigo" => "A", "cursantes" => 0],
            ["codigo" => "B", "cursantes" => 0],
            ["codigo" => "C", "cursantes" => 0],
            // Para curso 2
            ["codigo" => "A", "cursantes" => 0],
            ["codigo" => "B", "cursantes" => 0],
            ["codigo" => "C", "cursantes" => 0],
             // Para curso 3
            ["codigo" => "A", "cursantes" => 0],
            ["codigo" => "B", "cursantes" => 0],
            ["codigo" => "C", "cursantes" => 0]
        ]; 

        DB::table("grupos")->insert($data);
    }
}
