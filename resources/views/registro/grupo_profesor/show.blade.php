@extends('adminlte::page')

@section('title', 'Grupo')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')
<h1 class="text-center">Agregando profesor al grupo: ISSUE HERE</h1>
<h5 class="text-center">Formulario para asignar profesor</h5>
<hr>
<div class="container">
<form id="update-form" action="/registro/grupo_profesor/store" method="POST">
    @csrf
    <!-- Agrega SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="row justify-content-center">
        <div class="col-6">
            <!-- Codigo -->
            <div class="form-group">
                <label for="nombre">Grupo</label>
                <input type="text" class="form-control" name="" value="{{$grupo["codigo"]}}" disabled>
                <input type="text" class="form-control" name="idGrupo" value="{{$grupo["idGrupo"]}}" hidden>
                @error('codigo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
        </div>

        {{-- Profesores disponibles --}}
        <div class="col-6">
        <div class="form-group">
            <label for="grupo">Grupo</label>
            <select class="form-control" id="idProfesor" name="idProfesor">
                <option value="">Seleccionar profesor</option>
                @foreach ($profesores as $profesor)
                    <option value="{{$profesor["idProfesor"]}}">{{$profesor["nombre"]}} {{$profesor["apellido"]}}</option>
                @endforeach
            </select>
        </div>
    </div>


        <div class="col-12 mt-2">
            <div class="row justify-content-center text-center">
                <div class="col-6">
                    <!-- Botón Regresar -->
                    <a href="/registro/curso/grupo/show/" class="btn btn-danger btn-lg">Cancelar</a>
                </div>
                <div class="col-6">
                    <!-- Guardar Button -->
                    <button type="button" class="btn btn-primary btn-lg" onclick="confirmSave()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- Uso de SweetAlert2 --}}
<script>
    function confirmSave() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¿Deseas guardar los cambios?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, guardar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Obtener el formulario
                var form = document.getElementById('update-form');
                
                // Enviar el formulario
                form.submit();
            } else if (result.dismiss === Swal.DismissReason.cancel || result.dismiss === Swal.DismissReason.backdrop) {
                // Redirigir a la página actual
                window.location.href = window.location.href;
            }
        });
    }
</script>
</div>
@endsection
