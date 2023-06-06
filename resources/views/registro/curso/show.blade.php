@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Curso</h1>
@stop

@section('content')

<h1 class="text-center">Cursos</h1>
<h5 class="text-center">Listado de Cursos</h5>
<hr>
{{-- Boton para ir al formulario de agregar cursos --}}
<br>
<a class="btn btn-success btn-sm" href="/registro/curso/create/">Agregar nuevo cursos</a>
<br>
<br>
<table class="container table table-hover table-bordered mt-2">
    {{-- Encabezados --}}
    <tr class="table-info">
        <td>ID</td>
        <td>C&oacute;digo</td>
        <td>Nombre</td>
        <td>Acciones</td>
    </tr>

    {{-- Listado de curso --}}
    @foreach ($cursos as $item)

    <tr>
        <td>{{$item->idCurso}}</td>
        <td>{{$item->codigo}}</td>  
        <td>{{$item->nombre}}</td>
        <td>
            {{-- boton para modificar --}}
            <a class="btn btn-primary btn-sm" href="/registro/curso/edit/{{$item->idCurso}}">Modificar</a>
            {{-- boton para eliminar --}}
            <button class="btn btn-danger btn-sm" url="/registro/curso/destroy/{{$item->idCurso}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
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

