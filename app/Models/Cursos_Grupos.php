<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos_Grupos extends Model
{
    use HasFactory;
    protected $table = "cursos_grupos"; 

    protected $primaryKey = "idCursos_Grupos"; 

    protected $fillable = ["idCurso", "idGrupo"];
}
