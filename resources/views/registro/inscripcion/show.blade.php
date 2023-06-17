@extends('adminlte::page')

@section('title', 'Inscripcion')

@section('content_header')
    {{-- <h1>Curso</h1> --}}
@stop

@section('content')

<h1 class="text-center">Inscripciones</h1>
{{-- <h5 class="text-center">Listado de Cursos</h5> --}}
<hr>
{{-- Boton para ir al formulario de agregar cursos --}}
<br>
<a class="btn btn-success btn-lg" href="/registro/inscripcion/create/">Crear inscripcion</a>
<br>
<br>

<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="select1">Estudiante</label>
                <select class="form-control" id="select1">
                    <option value="">Select an option</option>
                </select>
            </div>
            <div class="form-group">
                <label for="select2">Curso</label>
                <select class="form-control" id="select2">
                    <option value="">Select an option</option>
                </select>
            </div>
            <div class="form-group">
                <label for="select3">Grupo</label>
                <select class="form-control" id="select3">
                    <option value="">Select an option</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function () {
        // Define the dynamic options data
        var optionsData = {
            select1: ['Option 1.1', 'Option 1.2', 'Option 1.3'],
            select2: ['Option 2.1', 'Option 2.2', 'Option 2.3'],
            select3: ['Option 3.1', 'Option 3.2', 'Option 3.3']
        };
        
        // Function to populate select options
        function populateSelectOptions(selectId, options) {
            var select = $('#' + selectId);
            
            // Clear existing options
            select.empty();
            
            // Add new options
            options.forEach(function (option) {
                select.append($('<option>').val(option).text(option));
            });
        }
        
        // Handle select1 change event
        $('#select1').on('change', function () {
            var selectedValue = $(this).val();
            
            // Get dynamic options based on selected value
            var dynamicOptions = optionsData[selectedValue] || [];
            
            // Populate select2 with dynamic options
            populateSelectOptions('select2', dynamicOptions);
        });
        
        // Handle select2 change event
        $('#select2').on('change', function () {
            var selectedValue = $(this).val();
            
            // Get dynamic options based on selected value
            var dynamicOptions = optionsData[selectedValue] || [];
            
            // Populate select3 with dynamic options
            populateSelectOptions('select3', dynamicOptions);
        });
    });
</script>

@endsection



