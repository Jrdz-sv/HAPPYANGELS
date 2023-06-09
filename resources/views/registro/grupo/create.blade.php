@extends('adminlte::page')

@section('title', 'Grupo')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Grupos de: {{$curso["nombre"]}}</h1>
<h5 class="text-center">Formulario para crear grupo</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/registro/curso/grupo/store" method="POST">
        {{-- token for security --}}
        @csrf
    <div class="row col-6 m-auto">

        {{-- input para saber curso al cual agregaremos el grupo --}}
        <input type="text" name="idCurso" value="{{$curso["idCurso"]}}" hidden>


        <div class="col-6">
            Nombre de grupo
            <input type="text" class="form-control" name="codigo">
            @error('codigo')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Cursantes de grupo
            <input type="number" class="form-control" name="" value="0" disabled>
            <input type="number" class="form-control" name="cursantes" value="0" hidden>
            {{-- error expection --}}
            @error('cursantes')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>


        <div class="col-12 mt-2">
            <div class="row justify-content-center text-center">
                <div class="col-6">
                    {{-- Botón Regresar --}}
                    <a href="/registro/curso/grupo/show/{{$curso["idCurso"]}}" class="btn btn-danger btn-lg">Cancelar</a>
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


