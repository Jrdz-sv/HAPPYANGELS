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
        Schema::create('cursos_grupos', function (Blueprint $table) {
            $table->id("idCursos_Grupos");
            $table->bigInteger("idCurso")->unsigned(); 
            $table->bigInteger("idGrupo")->unsigned();
            $table->foreign("idCurso")->references("idCurso")->on("cursos");
            $table->foreign("idGrupo")->references("idGrupo")->on("grupos");    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos_grupos');
    }
};
