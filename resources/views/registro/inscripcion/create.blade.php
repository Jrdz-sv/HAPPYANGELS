@extends('adminlte::page')

@section('title', 'Crear Inscripción')

@section('content_header')
    <h1>Crear Inscripción</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('registro/inscripcion/store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="estudiante">Estudiante</label>
                <select class="form-control" id="estudiante" name="estudiante">
                    <option value="">Seleccionar estudiante</option>
                    @foreach ($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="curso">Curso</label>
                <select class="form-control" id="curso" name="curso">
                    <option value="">Seleccionar curso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="grupo">Grupo</label>
                <select class="form-control" id="grupo" name="grupo">
                    <option value="">Seleccionar grupo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function () {
        // Obtener el valor seleccionado del estudiante
        $('#estudiante').on('change', function () {
            var estudianteId = $(this).val();

            // Hacer una solicitud AJAX para obtener los cursos del estudiante seleccionado
            $.ajax({
                url: '/obtener-cursos/' + estudianteId,
                type: 'GET',
                success: function (response) {
                    // Limpiar el select de cursos
                    $('#curso').empty();

                    // Agregar las opciones dinámicas al select de cursos
                    $.each(response.cursos, function (key, curso) {
                        $('#curso').append('<option value="' + curso.id + '">' + curso.nombre + '</option>');
                    });

                    // Limpiar el select de grupos
                    $('#grupo').empty();
                }
            });
        });

        // Obtener el valor seleccionado del curso
        $('#curso').on('change', function () {
            var cursoId = $(this).val();

            // Hacer una solicitud AJAX para obtener los grupos del curso seleccionado
            $.ajax({
                url: '/obtener-grupos/' + cursoId,
                type: 'GET',
                success: function (response) {
                    // Limpiar el select de grupos
                    $('#grupo').empty();

                    // Agregar las opciones dinámicas al select de grupos
                    $.each(response.grupos, function (key, grupo) {
                        $('#grupo').append('<option value="' + grupo.id + '">' + grupo.codigo + '</option>');
                    });
                }
            });
        });
    });
</script>
@endsection
