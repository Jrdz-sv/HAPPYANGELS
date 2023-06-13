@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div></div> <center><img src="https://www.amuaci.es/wp-content/uploads/2015/07/centro2-1060x450.jpg" alt="" width="1000" height="150"></center> 
    
    
@stop

@section('content')
<div class="w-100" class="col-md-6">
    <center><h3 class="text-blue ft-Exo2-Bold text-uppercase">BIENVENIDOS</h3></center> 
    <p class="text-justify" width="400" height="400">Nos complace poder ofrecerles un modelo educativo integral que potencia el aprendizaje de sus hijos e hijas y que los encamina a un futuro de liderazgo y oportunidades. La educaci&oacute;n impartida en el Colegio happyangels es la conjugaci&oacute;n de factores como: uso de la tecnolog&iacute;a, docentes calificados, ense&ntilde;anza de ingl&eacute;s, equipo tecnol&oacute;gico y ambientes educativos para el aprendizaje.</p>
</div>
<div class="row">
    <div class="col-md-4"><img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2020/10/destacada_E-978x652.jpg" alt="" width="350" height="300"><br><center>Computación y Diseño grafico</center></div>
    <div class="col-md-4"><img src="https://www.65ymas.com/uploads/s1/36/47/48/aprender-ingles.jpeg" alt="" width="350" height="300"><br><center>Ingles</center></div> 
    <div class="col-md-4"><img src="https://www.robotix.es/blog/wp-content/uploads/2015/04/45560_env_HS_SpinFac_B_01.jpg" alt="" width="350" height="300"><br><center>Robótica</center></div>
</div>   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<script src="{{ asset('js/custom.js') }}"></script>
