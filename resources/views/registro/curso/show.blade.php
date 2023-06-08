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
<a class="btn btn-success btn-sm" href="/registro/curso/create/">Agregar nuevo cursos</a>
<br>
<br>
<table class="container table">
    {{-- Encabezados --}}
    <thead class="table-dark">
        <td>ID</td>
        <td>C&oacute;digo</td>
        <td>Nombre</td>
        <td>Acciones</td>
    </thead>

    {{-- Listado de curso --}}
    @foreach ($cursos as $item)

    <tr>
        <td>{{$item->idCurso}}</td>
        <td>{{$item->codigo}}</td>  
        <td>{{$item->nombre}}</td>
        <td>
            <form action="/registro/curso/destroy/{{$item->idCurso}}" method="POST">
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm" href="/registro/curso/edit/{{$item->idCurso}}">Modificar</a>
                @csrf
                @method('DELETE')
                {{-- boton para eliminar --}}
                <button type="submit" class="btn btn-danger btn-sm" onclick="destroy($item->idCurso)">Eliminar</button>
            </form>
        </td>
    </tr>
    
    @endforeach
</table>
@endsection

{{-- CSS & JS --}}
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/product.js')}}"></script>
@stop

