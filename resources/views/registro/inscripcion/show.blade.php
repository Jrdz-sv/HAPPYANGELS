@extends('adminlte::page')

@section('title', 'Lista de Inscripciones')

@section('content_header')
    <h1>Lista de Inscripciones</h1>
@stop

@section('content')

{{-- Agregar Inscripcion --}}
<br>
<a class="btn btn-success btn-lg" href="/registro/inscripcion/create/">Agregar nuevo cursos</a>
<br>
<br>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Curso</th>
                        <th>Grupo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inscripciones as $inscripcion)
                        <tr>
                            <td>{{ $inscripcion->estudiante->nombre ?? 'N/A' }} {{ $inscripcion->estudiante->apellido ?? 'N/A' }}</td>
                            <td>{{ $inscripcion->curso->nombre ?? 'N/A' }}</td>
                            <td>{{ $inscripcion->grupo->codigo ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop