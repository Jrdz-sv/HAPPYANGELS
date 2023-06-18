<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Grupo;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Inscripcion;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;

class ReportsController extends Controller
{
    public function estudiantesPorGrupo($idGrupo)
    {
        
    }
}