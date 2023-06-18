@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    {{-- <h1>Profesor</h1> --}}
@stop

@section('content')

<h1 class="text-center">Usuarios</h1>
{{-- <h5 class="text-center">Listado de profesores</h5> --}}
<hr>
{{-- Boton para ir al formulario de agregar profesores --}}
<br>
<a class="btn btn-success btn-lg" href="/registro/user/create/">Agregar nuevo usuario</a>
<br>
<br>
<table class="container table">
    {{-- Encabezados --}}
    <thead class="table-dark">

        <td>Nombre</td>
        <td>Rol</td>
        <td>Email</td>
        <td>Password</td>
        <td>Acciones</td>
        
    </thead>

    {{-- Listado de profesor --}}
    @foreach ($users as $item)

    <tr>
    {{-- <td>{{$item->idProfesor}}</td> --}}
    <td>{{$item->name}}</td>  
    <td>{{$item->rol}}</td>  
    <td>{{$item->email}}</td>  
    <td>{{$item->password}}</td>
    <td>
        <form action="/registro/user/destroy/{{$item->id}}" method="POST">
            {{-- boton para modificar --}}
            <a class="btn btn-primary" href="/registro/user/edit/{{$item->id}}">Modificar</a>
            @csrf
            @method('DELETE')
            {{-- boton para eliminar --}}
            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">Eliminar</button>
            {{-- Agregamos sweetalert2 con CDN --}}
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function confirmDelete(profesorId) {
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
                                url: '/registro/user/destroy/' + profesorId,
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    _method: 'DELETE'
                                },
                                success: function(response) {
                                    // Mostrar notificación de éxito
                                    Swal.fire(
                                        'Eliminado',
                                        'El profesor se ha eliminado exitosamente',
                                        'success'
                                    ).then(() => {
                                        // Redireccionar a la página de visualización de profesor
                                        window.location.href = '/registro/user/show';
                                    });
                                },
                                error: function(xhr) {
                                    // Mostrar notificación de error
                                    Swal.fire(
                                        'Error',
                                        'Ha ocurrido un error al eliminar el profesor',
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