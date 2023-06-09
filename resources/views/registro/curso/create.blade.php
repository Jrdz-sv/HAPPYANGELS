@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Curso</h1>
@stop

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear cursos</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/registro/curso/store" method="POST">
        {{-- token for security --}}
        @csrf
    <div class="row col-6 m-auto">
        <div class="col-6">
            Codigo de curso
            <input type="text" class="form-control" name="codigo">
            {{-- error expection --}}
            @error('codigo')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Nombre de curso
            <input type="text" class="form-control" name="nombre">
            @error('nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        {{-- <div class="col-12">
            Curso
            <select name="curso" class="form-control">
                @foreach($cursos as $item)
                <option value="{{$item->codigo}}">{{$item->nombre}}</option>
                @endforeach
            </select>
            @error('curso')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div> --}}
        <div class="col-12 mt-2">
            <button class="btn btn-primary">Guardar</button>
        </div>
    </div>
    </form>
</div>
@endsection


