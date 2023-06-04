@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Curso</h1>
@stop

@section('content')
<h1 class="text-center">Modificar</h1>
<h5 class="text-center">Formulario para actualizar cursos</h5>
<hr>
<div class="container">
    <form action="{{ route('cursos.update', $curso->codigo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row row col-6 m-auto">
            <div class="col-6">
                Nombre
                <input type="text" class="form-control" name="nombre" value="{{$curso->nombre}}">
                @error('nombre')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="col-6">
                Codigo
                <input type="text" class="form-control" name="codigo" value="{{$curso->codigo}}">
                @error('codigo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12">
                Curso
                <select name="curso" class="form-control">
                    @foreach($cursos as $item)
                    <option value="{{$item->codigo}}" {{$item->codigo==$curso->codigo?'selected':''}}>{{$item->nombre}}</option>
                    @endforeach
                </select>
                @error('curso')
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