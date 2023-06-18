@extends('adminlte::page')

@section('title', 'Lista de Inscripciones')

@section('content_header')
    <h1>Lista de Inscripciones</h1>
@stop

@section('content')

{{-- Agregar Inscripcion --}}
<br>
<a class="btn btn-success btn-lg" href="/registro/inscripcion/create/">Agregar nueva Inscripción</a>
<br>
<br>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Curso</th>
                        <th>Grupo</th>
                        <td>Acciones</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($inscripciones as $inscripcion)
                        <tr>
                            <td>{{ $inscripcion->estudiante->nombre ?? 'N/A' }} {{ $inscripcion->estudiante->apellido ?? 'N/A' }}</td>
                            <td>{{ $inscripcion->curso->nombre ?? 'N/A' }}</td>
                            <td>{{ $inscripcion->grupo->codigo ?? 'N/A' }}</td>
                            <td>
                                <form action="/registro/inscripcion/destroy/" method="POST">
                             
                                    {{-- boton para modificar --}}
                                    <a class="btn btn-primary" href="/registro/inscripcion/edit/{{$inscripcion->idInscripcion}}">Modificar</a>
                                    @csrf
                                    @method('DELETE')
                                    {{-- boton para eliminar --}}
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{$inscripcion->idInscripcion}})">Eliminar</button>
                                    {{-- Agregamos sweetalert2 con CDN --}}
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                    <script>
                                        function confirmDelete(inscripcionId) {
                                            Swal.fire({
                                                title: '¿Estás seguro?',
                                                text: '¡No podrás revertir esto!',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Sí, eliminarlo',
                                                cancelButtonText: 'Cancelar'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Hacer una petición AJAX para eliminar el curso
                                                    $.ajax({
                                                        url: '/registro/inscripcion/destroy/' + inscripcionId,
                                                        type: 'POST',
                                                        data: {
                                                            _token: '{{ csrf_token() }}',
                                                            _method: 'DELETE'
                                                        },
                                                        success: function(response) {
                                                            // Mostrar notificación de éxito
                                                            Swal.fire(
                                                                'Eliminado',
                                                                'El curso se ha eliminado exitosamente',
                                                                'success'
                                                            ).then(() => {
                                                                // Redireccionar a la página de visualización de cursos
                                                                window.location.href = '/registro/inscripcion/show';
                                                            });
                                                        },
                                                        error: function(xhr) {
                                                            // Mostrar notificación de error
                                                            Swal.fire(
                                                                'Error',
                                                                'Ha ocurrido un error al eliminar la inscripcion',
                                                                'error'
                                                            );
                                                        }
                                                    });
                                                }
                                            });
                                        }
                                    </script>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop