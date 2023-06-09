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
<form action="/registro/curso/update/{{$course->idCurso}}" method="POST">
        @csrf
        @method('PUT')
    <div class="row row col-6 m-auto">
        <!-- Agrega SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <form action="/ruta-de-guardado" method="POST">
            <div class="col-6">
                Nombre
                <input type="text" class="form-control" name="nombre" value="{{$course->nombre}}">
                @error('nombre')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="col-6">
                Codigo
                <input type="text" class="form-control" name="codigo" value="{{$course->codigo}}"><br>
                @error('codigo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12 mt-2">
                <div class="row justify-content-center text-center">
                    <div class="col-6">
                        {{-- Botón Regresar --}}
                        <a href="/registro/curso/show" class="btn btn-danger btn-lg">Cancelar</a>
                    </div>
                    <div class="col-6">
                    {{-- Guardar Button --}}
                    <button type="button" class="btn btn-primary btn-lg" onclick="confirmSave()">Guardar</button>
                </div>
            </div>
    </div>
</form>
        
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
                // Obtener los datos del formulario
                var form = document.forms[0];
                var formData = new FormData(form);

                // Realizar la solicitud de actualización utilizando AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', form.action);
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        // Mostrar notificación de éxito
                        Swal.fire(
                            'Guardado',
                            'Los cambios se han guardado exitosamente',
                            'success'
                        ).then(() => {
                            // Redirect back to Show Cursos table
                            window.location.href = '/registro/curso/show';
                        });
                    } else if (xhr.readyState === XMLHttpRequest.DONE && xhr.status !== 200) {
                        // Mostrar notificación de error en caso de fallo en la solicitud
                        Swal.fire(
                            'Error',
                            'No se pudo guardar los cambios',
                            'error'
                        );
                    }
                };
                xhr.send(formData);
            } else if (result.dismiss === Swal.DismissReason.cancel || result.dismiss === Swal.DismissReason.backdrop) {
                // Redirect back to current page
                window.location.href = window.location.href;
            }
        });
    }
</script>
</div>
@endsection