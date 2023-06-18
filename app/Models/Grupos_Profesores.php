<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos_Profesores extends Model
{
    use HasFactory;
    protected $table = "grupos_profesores";

    protected $primaryKey = "idGrupos_Profesores"; 

    protected $fillable = ["idGrupo", "idProfesor"]; 
}
