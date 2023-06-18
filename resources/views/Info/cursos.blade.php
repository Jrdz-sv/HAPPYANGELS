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
        {{-- Aqui Mario no se pierda --}}
        <td> En este curso de redes aprender&aacute;s acerca de la manera como funcionan las redes, sus principales caracter&iacute;sticas y de qu&eacute; modo se puede implementar. <br>
          Asimismo, en este curso de redes aprender&aacute;s los principales m&eacute;todos de configuraci&oacute;n e implementaci&oacute;n, con base en una serie de conceptos claves y principios de aplicaci&oacute;n.&nbsp; <br><br>
          <p style="text-align: justify;">En consecuencia, en este curso de redes aprender&aacute;s a:</p>
          <ul>
            <li style="text-align: justify;">&nbsp;Comprender los conceptos fundamentales de las redes y las comunicaciones actuales.</li>
            <li style="text-align: justify;">Entender los distintos componentes que conforman una red de ordenadores local y global.</li>
            <li style="text-align: justify;">Dise&ntilde;ar, configurar y solucionar problemas de redes de computadoras.</li>
            <li style="text-align: justify;">Analizar los fundamentos de direccionamiento IPv4.</li>
            <li style="text-align: justify;">Entender los fundamentos de direccionamiento IPv6.</li>
        </ul>
        </td>
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
        <td>
          Este curso de Ciberseguridad desarrolla los conocimientos y habilidades necesarios para dominar los conceptos básicos de la ciberseguridad. El material del curso se actualiza regularmente para mantener el ritmo de los cambios en la tecnología y el panorama de las amenazas. Los estudiantes salen con una base sólida para construir una carrera en ciberseguridad o simplemente fortalecer su propia red doméstica.</td>
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
        <td>
          En este curso de mantenimiento de computadoras o computuaci&oacute;n aprender&aacute;s&nbsp;&nbsp;los conceptos b&aacute;sicos de Inform&aacute;tica y sistematizaci&oacute;n, haciendo un reconocimiento de las partes de los PCs, Port&aacute;tiles, tales como tarjetas, boards, procesadores, memorias, discos duros, perif&eacute;ricos, etc.
        
         <p>Asimismo, en este curso de mantenimiento de computadoras o comptuaci&oacute;n aprender&aacute;s aplicar procesos de mantenimiento, cuidado, limpieza, soporte e intervenci&oacute;n t&eacute;cnica a un sistema computacional.&nbsp;</p>
    <p style="text-align: justify;">En consecuencia, en este curso de mantenimiento de computadoras o comptuaci&oacute;n aprender&aacute;s a:</p>
    <ul style="text-align: justify;">
      <li style="text-align: justify;">Conocer y entender las funciones de los aspectos estructurales, topogr&aacute;ficos y funcionales de un sistema computo.</li>
      <li style="text-align: justify;">Aplicar procesos de instalaci&oacute;n, mantenimiento y reparaci&oacute;n del hardware y software computacional.</li>
      <li style="text-align: justify;">Conocer las funciones de un t&eacute;cnico inform&aacute;tico y de sistemas.</li>
    </ul>
        </td>
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
        <td>
					<p>La codificación se trata de razonamiento. Aprender a codificar combina el conocimiento científico con la creatividad y el aprendizaje de un idioma completamente nuevo. Requiere una alta actividad de múltiples áreas en el cerebro y capacita a los niños por completo. Cuando los niños codifican, aprenden a expresarse, a desarrollar el pensamiento procedimental y a fortalecer su confianza, adquieren un nuevo conjunto de habilidades que los ayuda a pasar de simplemente consumir información a convertirse en creadores digitales.</p>
          <p>En el curso de Desarrollo de aplicaciones, los estudiantes aprenderán los conceptos básicos de la codificación de aplicaciones y juegos para teléfonos inteligentes. Escribirán código por primera vez, desarrollarán y diseñarán sus propios productos únicos hechos por ellos mismos.<br />
              Durante el curso, los estudiantes aprenderán e implementarán los siguientes conceptos:</p>
        <ul>
          <li><strong>Sentencias</strong> <strong>de programación:</strong> «input», «If/else», «random» e «intersect».</li>
          <li><strong>Variables:</strong> uso de variables para almacenar datos.</li>
          <li><strong>Diseño básico:</strong> inserción de archivos multimedia (video, audio e imagen) en la aplicación.</li>
        </ul>
        </td>
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
        <td>
          <p>Nuestro curso de inglés online consta de más de cien lecciones. Elige los temas que más te interesen, ya sean sobre cultura, historia o viajes. Incluso tenemos un curso de inglés de negocios, que te ayudará a mejorar tus oportunidades profesionales. ¡Con independencia de cuáles sean tus objetivos, tenemos algunas lecciones sencillas y divertidas para ti!</p>
          <p>Aprende a hablar inglés con una combinación de nuestros ejercicios de pronunciación basados en la inteligencia artificial y diálogos realizados por nuestros expertos en la enseñanza de lenguas extranjeras. También puedes probar nuestros ejercicios de conversación y practicar conversando con los hablantes de inglés de nuestra comunidad. Aprende a leer y hablar en inglés con artículos y vídeos amenos.</p>
        </td>
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
        <td>
          En la comunicación gráfica, como en cualquier disciplina, para poder romper las reglas es necesario conocerlas primero. En este curso aprenderás los secretos del diseño gráfico que siempre quisiste aprender, para así convertirte en un comunicador de ideas y conceptos sólidos a través de tus dibujos e ilustraciones.

        </td>
      </tr>
    </tbody>
</table>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @yield('js')
@endsection
