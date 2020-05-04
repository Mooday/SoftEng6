<!DOCTYPE html>

@foreach ($codigos as $codigo)
<span>{{$codigo->codigo}}</span>  
@endforeach

<br>
<br>
<span>David, {{$ldate = date('d')}} de {{$ldate = date('F')}} {{date('Y')}}</span><br> 
<br>
<br>
<Section>
Licenciado <br>
<strong>FRANKLIN DE GRACIA </strong><br>
<span>Biblioteca Dr. Víctor Levi Sasso</span><br>
<span>Universidad Tecnológica de Panamá </span><br>
<span>Centro Regional de Chiriquí </span><br>
E. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D.<br>
</Section>
<br>
<br>
<br>
<span>Reciba ante todo un cordial saludo, deseándole éxitos en sus funciones.</span><br>
<p ALIGN="justify">
Le hacemos entrega de los Trabajos de Graduación que han sustentado estudiantes de  la Facultad  de  Ingeniería de Sistemas Computacionales,  para obtener el título de “Licenciatura en Ingeniería de Sistemas y Computación” y 
“Licenciatura en Ingeniería de Sistemas de Información”, “Licenciatura en Redes Informáticas”, ”Licenciatura en Desarrollo de Software”, de la Facultad de Ingeniería de Sistemas Computacionales”, FISC-Chiriquí.
Detalle de los mismos: 
</p>
<br>
<br>
<div style="text-align:center;">
<Strong>Anteproyectos para Ingreso Biblioteca</Strong><br><br> 
<table border="2" align="center">
    <thead>
        <tr  bgcolor="GREEN">
            <th style="text-align:center;">Estudiante</th><br>
            <th style="text-align:center;">Cedula</th><br>
            <th style="text-align:center;">Estudiante</th><br>
            <th style="text-align:center;">Cedula</th><br>
            <th style="text-align:center;">Carrera</th><br>
            <th style="text-align:center;">Titulo</th><br>
            <th style="text-align:center;">Tipo de Anteproyecto</th><br> 
        </tr>
    </thead>
    <tbody>
        @foreach ($materias['anteproyecto'] as $materia)
        <tr>
            <td style="text-align:center;">{{$materia->Nombre_estudiante1}}</td>
            <td style="text-align:center;">{{$materia->Cedula_est1}}</td>
            <td style="text-align:center;">{{$materia->Nombre_estudiante2}}</td>
            <td style="text-align:center;">{{$materia->Cedula_est2}}</td>
            <td style="text-align:center;">{{$materia->Carrera}}</td>
            <td style="text-align:center;">{{$materia->Nombre_anteproyecto}}</td>
            <td style="text-align:center;">{{$materia->Tipo_Anteproyecto}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<span>Agradeciendo su amable atención, queda de usted.</span>
<br>
<br>
<span>Atentamente,</span><br>
<br>
<section>
<Strong>Dr. Juan J. Saldaña B. </Strong><br> 
Coordinador de la FISC<br>
Centro Regional de Chiriquí<br>
</section>
<br>
<span>Adj.: Lo indicado</span>
</body>
</html>
