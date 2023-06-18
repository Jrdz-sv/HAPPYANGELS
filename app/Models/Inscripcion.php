<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    
    protected $table = "inscripciones"; 

    protected $primaryKey = "idInscripcion"; 

    protected $fillable = ["idGrupo", "idEstudiante", "idCurso"];
    
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'idEstudiante');
    }
    
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'idCurso');
    }
    
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'idGrupo');
    }
}
