@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear usuarios</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/registro/user/store" method="POST">
        {{-- token for security --}}
        @csrf
    <div class="row col-6 m-auto">
        <div class="col-6">
            <label>Nombre del usuario</label>
            <input type="text" class="form-control" name="nombre">
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Rol del usuario</label>
            <select class="form-control" name="rol">
                <option value="">Seleccionar Rol</option>
                @foreach ($roles as $rol)
                    <option value="{{ $rol->idRol }}">{{ $rol->rol }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            Email del usuario
            <input type="email" class="form-control" name="email">
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Password del usuario
            <input type="password" class="form-control" name="password">
            @error('password')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>


        <div class="col-12 mt-2">
            <div class="row justify-content-center text-center">
                <div class="col-6">
                    {{-- Botón Regresar --}}
                    <a href="/registro/user/show" class="btn btn-danger btn-lg">Cancelar</a>
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


