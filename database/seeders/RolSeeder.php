<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["rol" => "Administrador"], 
            ["rol" => "Profesor"], 
            ["rol" => "Estudiante"]
        ]; 
        DB::table("roles")->insert($data); 
    }
}
