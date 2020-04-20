<!DOCTYPE html>
<div>FISC-CH-022-2018</div><br>
<br>
<span>David, </span><br> 
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
<table >
    <thead>
        <tr>
            <th style="text-align:center;">Nombre</th><br>
            <th style="text-align:center;">Cedula</th><br>
            <th style="text-align:center;">Carrera</th><br>
            <th style="text-align:center;">Titulo</th><br> 
        </tr>
    </thead>
    <tbody>
        @foreach ($estu as $estu)
        <tr>
        <td style="text-align:center;">{{$estu->Nombre_estudiante1, $estu->Nombre_estudiante2}}</td>
        <td style="text-align:center;">{{$estu->Cedula_est1,$estu->Cedula_est2}}</td>
        <td style="text-align:center;">{{$estu->Carrera}}</td>
        <td style="text-align:center;">{{$estu->Nombre_anteproyecto}}</td>
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
<footer>
El Señor es mi Pastor, nada me falta. &nbsp;&nbsp;&nbsp;Salmo 23
</footer>
</body>
</html>
