<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = "estudiantes";
    protected $primaryKey = "idEstudiante";
    protected $fillable = ["nombre", "apellido"];

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'idEstudiante');
    }
// aqui agregamos la funtion boot
    protected static function boot()
    {
        parent::boot();
        //  Entonces aqui con el deleting relacionamos el estudiante con inscrupciones
        static::deleting(function ($estudiante) {
            $estudiante->inscripciones()->delete();
        });
    }
}