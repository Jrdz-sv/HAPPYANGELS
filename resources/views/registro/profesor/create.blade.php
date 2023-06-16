@extends('adminlte::page')

@section('title', 'Profesor')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear profesores</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/registro/profesor/store" method="POST">
        {{-- token for security --}}
        @csrf
    <div class="row col-6 m-auto">
        <div class="col-6">
            Nombre del profesor
            <input type="text" class="form-control" name="nombre">
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Apellido del profesor
            <input type="text" class="form-control" name="apellido">
            @error('apellido')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>


        <div class="col-12 mt-2">
            <div class="row justify-content-center text-center">
                <div class="col-6">
                    {{-- Botón Regresar --}}
                    <a href="/registro/profesor/show" class="btn btn-danger btn-lg">Cancelar</a>
                </div>
                <div class="col-6">
                    {{-- Botón Guardar --}}
                    <button class="btn btn-primary btn-lg">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection


