@extends('adminlte::page')

@section('title', 'Estudiante')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Estudiantes</h1>
{{-- <h5 class="text-center">Listado de Cursos</h5> --}}
<hr>
{{-- Boton para ir al formulario de agregar cursos --}}
<br>
<a class="btn btn-success btn-lg" href="/registro/estudiante/create/">Agregar nuevo estudiante</a>
<br>
<br>
<table class="container table">
    {{-- Encabezados --}}
    <thead class="table-dark">

        <td>Nombre</td>
        <td>Apellido</td>
        {{-- <td>Acciones</td> --}}
        
    </thead>

    {{-- Listado de curso --}}
    @foreach ($estudiantes as $item)

    <tr>
    {{-- <td>{{$item->idCurso}}</td> --}}
    <td>{{$item->nombre}}</td>  
    <td>{{$item->apellido}}</td>
    <td>
        <form action="/registro/estudiante/destroy/{{$item->idEstudiante}}" method="POST">
    
        </form>
    </td>
    </tr>
    
    @endforeach
</table>
@endsection