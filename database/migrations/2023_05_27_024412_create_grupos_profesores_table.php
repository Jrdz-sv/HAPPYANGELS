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
        Schema::create('grupos_profesores', function (Blueprint $table) {
            $table->id("idGrupos_Profesores");
            $table->bigInteger("idGrupo")->unsigned(); 
            $table->bigInteger("idProfesor")->unsigned();
            $table->foreign("idGrupo")->references("idGrupo")->on("grupos");
            $table->foreign("idProfesor")->references("idProfesor")->on("profesores"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_profesores');
    }
};
