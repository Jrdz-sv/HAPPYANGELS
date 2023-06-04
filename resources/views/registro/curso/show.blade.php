@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Curso</h1>
@stop

@section('content')

<h1 class="text-center">Cursos</h1>
<h5 class="text-center">Listado de Cursos</h5>
<hr>
{{-- Boton para ir al formulario de agregar producto --}}
<br>
<a class="btn btn-success btn-sm" href="/products/create">Agregar nuevo cursos</a>
<br>
<br>
<table class="container table table-hover table-bordered mt-2">
    {{-- Encabezados --}}
    <tr class="table-info">
        <td>C&oacute;digo</td>
        <td>Nombre</td>
        <td>Acciones</td>
    </tr>

    {{-- Listado de curso --}}
    @foreach ($cursos as $curso)

    <tr>
        <td>{{$curso->codigo}}</td>  
        <td>{{$curso->nombre}}</td>
        <td>
            {{-- boton para modificar --}}
            <a class="btn btn-primary btn-sm" href="/products/edit/{{$curso->codigo}}">Modificar</a>
            {{-- boton para eliminar --}}
            <button class="btn btn-danger btn-sm" url="/products/destroy/{{$curso->codigo}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
        </td>
    </tr>
    
    @endforeach
</table>
@endsection

@section('scripts')
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{asset('js/product.js')}}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<script src="{{ asset('js/custom.js') }}"></script>