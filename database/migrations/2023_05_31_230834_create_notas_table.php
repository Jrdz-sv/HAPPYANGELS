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
        Schema::create('notas', function (Blueprint $table) {
            $table->id("idNota");
            $table->bigInteger("idCurso")->unsigned();
            $table->foreign("idCurso")->references("idCurso")->on("cursos");
            $table->bigInteger("idEstudiante")->unsigned();
            $table->foreign("idEstudiante")->references("idEstudiante")->on("estudiantes");
            $table->double("nota");
            $table->string("descripcion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
