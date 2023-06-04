@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Curso</h1>
@stop

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear productos</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/registro/curso/store" method="POST">
        {{-- token for security --}}
        @csrf
    <div class="row col-6 m-auto">
        <div class="col-6">
            Nombre
            <input type="text" class="form-control" name="nombre">
            {{-- error expection --}}
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Precio
            <input type="text" class="form-control" name="precio">
            @error('precio')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-12">
            Marca
            <select name="marca" class="form-control">
                @foreach($marcas as $item)
                <option value="{{$item->codigo}}">{{$item->nombre}}</option>
                @endforeach
            </select>
            @error('marca')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-12 mt-2">
            <button class="btn btn-primary">Guardar</button>
        </div>
    </div>
    </form>
</div>
@endsection

{{-- CSS & JS --}}
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<script src="{{ asset('js/custom.js') }}"></script>