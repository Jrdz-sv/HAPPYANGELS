<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id("idInscripcion");
            $table->bigInteger("idGrupo")->unsigned(); 
            $table->bigInteger("idEstudiante")->unsigned();
            $table->foreign("idGrupo")->references("idGrupo")->on("grupos");
            $table->foreign("idEstudiante")->references("idEstudiante")->on("estudiantes");   

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
