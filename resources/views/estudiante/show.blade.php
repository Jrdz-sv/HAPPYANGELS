@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Cursos</h1>
{{-- <h5 class="text-center">Listado de Cursos</h5> --}}
<hr>
{{-- Boton para ir al formulario de agregar cursos --}}
<br>
<a class="btn btn-success btn-lg" href="/registro/curso/create/">Agregar nuevo cursos</a>
<br>
<br>
<table class="container table">
    {{-- Encabezados --}}
    <thead class="table-dark">

        <td>C&oacute;digo</td>
        <td>Nombre</td>
        <td>Acciones</td>
        
    </thead>

    {{-- Listado de curso --}}
    @foreach ($cursos as $item)

    <tr>
    {{-- <td>{{$item->idCurso}}</td> --}}
    <td>{{$item->codigo}}</td>  
    <td>{{$item->nombre}}</td>
    <td>
        <form action="/registro/curso/destroy/{{$item->idCurso}}" method="POST">

            {{-- boton para administrar grupos --}}
            <a class="btn btn-secondary" href="/registro/curso/grupo/show/{{$item->idCurso}}">Grupos</a>
    
        </form>
    </td>
    </tr>
    
    @endforeach
</table>
@endsection



