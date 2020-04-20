<!DOCTYPE html>
<div>FISC-CH-022-2018</div><br>
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
<br>

<div style="text-align:center;">
<Strong>MATERIAS DE MAESTRÍA CON OPCIÓN A TÉSIS </Strong><br><br> 
<table border="2" align="center">
    <thead>
        <tr  bgcolor="GREEN">
            <th style="text-align:center;">Nombre</th><br>
            <th style="text-align:center;">Cedula</th><br>
            <th style="text-align:center;">Carrera</th><br>
            <th style="text-align:center;">Titulo</th><br> 
        </tr>
    </thead>
    <tbody>
        @foreach ($materias as $materias)
        <tr>
            <td style="text-align:center;">{{$materias->Nombre_estudiante1}}</td>
            <td style="text-align:center;">{{$materias->Cedula_est1}}</td>
            <td style="text-align:center;">{{$materias->Carrera}}</td>
            <td style="text-align:center;">{{$materias->Nombre_anteproyecto}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<div style="text-align:center;">
    <Strong>TÉSIS Y TEÓRICOS PRÁCTICOS  </Strong><br><br> 
    <table border="2" align="center">
        <thead>
            <tr  bgcolor="GREEN">
                <th style="text-align:center;">Nombre</th><br>
                <th style="text-align:center;">Cedula</th><br>
                <th style="text-align:center;">Carrera</th><br>
                <th style="text-align:center;">Titulo</th><br> 
            </tr>
        </thead>
        <tbody>
            @foreach ($tesis as $tesis)
            <tr>
                <td style="text-align:center;">{{$tesis->Nombre_estudiante1}}</td>
                <td style="text-align:center;">{{$tesis->Cedula_est1}}</td>
                <td style="text-align:center;">{{$tesis->Carrera}}</td>
                <td style="text-align:center;">{{$tesis->Nombre_anteproyecto}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

<br>
<br>
<br>
<span>Agradeciendo su amable atención, queda de usted.</span><br>
<br>
<br>
<span>Atentamente,</span><br>
<br>
<br>
<section>
<Strong>Dr. Juan J. Saldaña B. </Strong><br> 
Coordinador de la FISC<br>
Centro Regional de Chiriquí<br>
</section>
<br>
<br>
<br>
<br>
<span>Adj.: Lo indicado</span>
<br>
<br>
<br>
</body>
</html>
