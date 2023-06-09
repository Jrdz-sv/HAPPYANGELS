@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Cursos</h1>
{{-- <h5 class="text-center">Listado de Cursos</h5> --}}
<hr>
{{-- Boton para ir al formulario de agregar cursos --}}
<br>
<a class="btn btn-success btn-sm" href="/registro/curso/create/">Agregar nuevo cursos</a>
<br>
<br>
<table class="container table">
    {{-- Encabezados --}}
    <thead class="table-dark">
        <td>ID</td>
        <td>C&oacute;digo</td>
        <td>Nombre</td>
        <td>Acciones</td>
    </thead>

    {{-- Listado de curso --}}
    @foreach ($cursos as $item)

    <tr>
        <td>{{$item->idCurso}}</td>
        <td>{{$item->codigo}}</td>  
        <td>{{$item->nombre}}</td>
        <td>
            <form action="/registro/curso/destroy/{{$item->idCurso}}" method="POST">
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm" href="/registro/curso/edit/{{$item->idCurso}}">Modificar</a>
                @csrf
                @method('DELETE')
                {{-- boton para eliminar --}}
                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $item->idCurso }})">Eliminar</button>
                {{-- Agregamos sweetalert2 con CDN --}}
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    function confirmDelete(cursoId) {
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
                                    url: '/registro/curso/destroy/' + cursoId,
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
                                            window.location.href = '/registro/curso/show';
                                        });
                                    },
                                    error: function(xhr) {
                                        // Mostrar notificación de error
                                        Swal.fire(
                                            'Error',
                                            'Ha ocurrido un error al eliminar el curso',
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
</table>
@endsection



