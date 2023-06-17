@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.css">

    <h1 style="color: orange" class="text-center"><b>Bienvenidos a HapyAngels</b></h1>
    <hr class="bg-white">

    <div class="jumbotron welcome-banner">
        <div class="container">
          <h5>Bienvenido al colegio "HappyAngels", donde brindamos una educación práctica y enriquecedora a niños y adolescentes. Con más de 600 estudiantes cada año, ofrecemos una amplia variedad de cursos en distintas áreas. Nuestro equipo de docentes altamente calificados se compromete a fomentar el crecimiento académico y personal de cada estudiante. Además, promovemos el aprendizaje práctico y ofrecemos actividades extracurriculares y eventos especiales. ¡Únete a nuestra comunidad y descubre tu potencial en "HappyAngels"!</h5>
        </div>
      </div>  

    <h3 style="color: yellow" class="text-center"><b>Cursos disponibles</b></h3><br>

    <div class="card-group">
        <div class="card custom-card">
            <div class="card-header">
                <h2 class="card-title"><b>Redes</b></h2>
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <img src="vendor/adminlte/dist/img/network.png" class="card-img-top custom-image-size" alt="Cursos">
                <div class="hover-info">
                    <p>Puedes ver más acerca de nuestros cursos aquí.</p>
                    <a href="#" class="btn btn-info">Más información</a>
                </div>
            </div>
        </div>

        <div class="card custom-card">
            <div class="card-header">
                <h2 class="card-title"><b>Ciberseguridad</b></h2>
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <img src="vendor/adminlte/dist/img/security.png" class="card-img-top custom-image-size" alt="Cursos">
                <div class="hover-info">
                    <p>Puedes ver más acerca de nuestros cursos aquí.</p>
                    <a href="#" class="btn btn-info">Más información</a>
                </div>
            </div>
        </div>

        <div class="card custom-card">
            <div class="card-header">
                <h2 class="card-title"><b>Mantenimiento</b></h2>
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <img src="vendor/adminlte/dist/img/maintenance.png" class="card-img-top custom-image-size" alt="Cursos">
                <div class="hover-info">
                    <p>Puedes ver más acerca de nuestros cursos aquí.</p>
                    <a href="#" class="btn btn-info">Más información</a>
                </div>
            </div>
        </div>
        
        <div class="card custom-card">
            <div class="card-header">
                <h2 class="card-title"><b>Desarrollo</b></h2>
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <img src="vendor/adminlte/dist/img/development.png" class="card-img-top custom-image-size" alt="Cursos">
                <div class="hover-info">
                    <p>Puedes ver más acerca de nuestros cursos aquí.</p>
                    <a href="#" class="btn btn-info">Más información</a>
                </div>
            </div>
        </div>
        
        <div class="card custom-card">
            <div class="card-header">
                <h2 class="card-title"><b>Inglés</b></h2>
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <img src="vendor/adminlte/dist/img/eng.png" class="card-img-top custom-image-size" alt="Cursos">
                <div class="hover-info">
                    <p>Puedes ver más acerca de nuestros cursos aquí.</p>
                    <a href="#" class="btn btn-info">Más información</a>
                </div>
            </div>
        </div>
        
        <div class="card custom-card">
            <div class="card-header">
                <h2 class="card-title"><b>Diseño</b></h2>
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <img src="vendor/adminlte/dist/img/web-design.png" class="card-img-top custom-image-size" alt="Cursos">
                <div class="hover-info">
                    <p>Puedes ver más acerca de nuestros cursos aquí.</p>
                    <a href="#" class="btn btn-info">Más información</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection