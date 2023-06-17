@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <h1 style="color: orange" class="text-center"><b>Bienvenidos a HappyAngels</b></h1>
    <hr class="bg-white">
@endsection

@section('content')

<table class="table">
    <thead class="table-danger">
      <tr>
        <th scope="col" class="text-center">Redes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Redes</td>
      </tr>
    </tbody>
</table>
<table class="table">
    <thead class="table-info">
      <tr>
        <th scope="col" class="text-center">Ciberseguridad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Redes</td>
      </tr>
    </tbody>
</table>
<table class="table">
    <thead class="table-success">
      <tr>
        <th scope="col" class="text-center">Mantenimiento</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Redes</td>
      </tr>
    </tbody>
</table>
<table class="table">
    <thead class="table-warning">
      <tr>
        <th scope="col" class="text-center">Desarrollo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Redes</td>
      </tr>
    </tbody>
</table>
<table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col" class="text-center">Inglés</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Redes</td>
      </tr>
    </tbody>
</table>
<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col" class="text-center">Diseño</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Redes</td>
      </tr>
    </tbody>
</table>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @yield('js')
@endsection
