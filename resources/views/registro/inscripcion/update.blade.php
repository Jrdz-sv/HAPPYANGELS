@extends('adminlte::page')

@section('title', 'Crear Inscripción')

@section('content_header')
    <h1>Crear Inscripción</h1>
@stop

<style>
    .hidden {
        display: none;
    }
</style>

<script>
    function displaying() {
        var options = document.getElementsByClassName("grupo"); 
        for(var x = 0; x < options.length; x++){
            options[x].selected = false;
            options[x].classList.add("hidden");
        }

      var selectElement = document.getElementById("curso");
      var selectedValue = selectElement.value;
      var elements = document.getElementsByName(selectedValue); 
      for(var i = 0; i < elements.length; i++){
        elements[i].classList.remove("hidden");
      } 
    }
  </script>

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/registro/inscripcion/update/{{$inscripcion['idInscripcion']}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="estudiante">Estudiante</label>
                <select class="form-control" id="estudiante" name="estudiante">
                    @foreach ($estudiantesOptions as $option)
                        @if ($option['value'] == $inscripcion['idEstudiante'])
                            <option value="{{ $option['value'] }}" selected>{{ $option['text'] }}</option>
                        @else
                            <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="curso">Curso</label>
                <select class="form-control" id="curso" name="curso" onchange="displaying()">
                    @foreach ($cursosOptions as $option)
                        @if ($option['value'] == $inscripcion['idCurso'] )
                            <option value="{{ $option['value'] }}" selected>{{ $option['text'] }}</option>
                        @else
                            <option value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="grupo">Grupo</label>
                <select class="form-control" id="grupo" name="grupo">
                    @foreach ($gruposOptions as $option)
                        @if ($option['value'] == $inscripcion['idGrupo'] )
                            <option value="{{ $option['value'] }}" name="{{$option['name']}}" class="grupo" selected>{{ $option['text'] }}</option>
                        @else
                            @if ($option['name'] == $inscripcion['idCurso'] )
                                <option value="{{ $option['value'] }}" name="{{$option['name']}}" class="grupo">{{ $option['text'] }}</option> 
                            @else
                                <option value="{{ $option['value'] }}" name="{{$option['name']}}" class="grupo hidden">{{ $option['text'] }}</option> 
                            @endif
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@stop

@section('js')
{{-- <script>
    $(document).ready(function () {
        // Obtener el valor seleccionado del estudiante
        $('#estudiante').on('change', function () {
            var estudianteId = $(this).val();

            // Hacer una solicitud AJAX para obtener los cursos del estudiante seleccionado
            $.ajax({
                url: '/registro/cursos/' + estudianteId,
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
                url: '/registro/grupos/' + cursoId,
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
</script> --}}
@endsection
