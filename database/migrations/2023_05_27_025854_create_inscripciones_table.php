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
            $table->id('idInscripcion');
            $table->unsignedBigInteger('idGrupo');
            $table->unsignedBigInteger('idEstudiante');
            $table->unsignedBigInteger('idCurso'); // Add the foreign key column for curso
        
            $table->foreign('idGrupo')->references('idGrupo')->on('grupos');
            $table->foreign('idEstudiante')->references('idEstudiante')->on('estudiantes');
            $table->foreign('idCurso')->references('idCurso')->on('cursos'); // Define the foreign key constraint for curso
        
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
