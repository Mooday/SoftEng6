<?php
/* Establecer el localismo al holandés */
setlocale(LC_ALL, 'es_MX');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Profesor Jurado</title>
    <link rel="stylesheet" href="css/pdf-style.css">
</head>

<img id="utp" src="uploads/avatars/logo_utp.jpg">
<img id="fisc" src="uploads/avatars/fisc_logo.png">
<br>
<br>
<br>
<br>
<br>
<header>
    Universidad Tecnológica de Panamá<br>
    Sede Chiriquí<br>
    Facultad de Ingeniería de Sistemas Computacionales<br>
</header>
<body>

<br>
<br>
<div>{{$data->codnota}}</div><br>
<br>
<span>David, {{$fecha}}</span><br>
<br>
<br>
<Section>
Ingeniero/a <br>
<strong>{{$profesor1->nombre.' '.$profesor1->apellido}}</strong><br>
Facultad de Ingeniería de Sistemas Computacionales<br>
UTP-Chiriquí<br>
E. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M.<br>
</Section>
<br>
<span>Respetado/a ingeniero/a {{$profesor1->apellido}}:</span><br>
<br>
<br>
<span>Reciba ante todo un cordial saludo, deseándole éxitos en sus funciones.</span><br>
<p>
    @foreach($anteproyecto as $ante)
Por este medio le comunico que ha sido designado como miembro del Tribunal Examinador para
evaluar el Trabajo de Graduación titulado: <b>"{{$ante->Nombre_anteproyecto}}"</b> de la estudiante {{$ante->Nombre_estudiante1}}.
<br>
<br>
Para obtar por el título de <u>{{$ante->Carrera}}</u>.
<br>
La sustentación será el {{strftime("%A %d de %B de %Y", strtotime($ante->sustentationdate))}} a las {{$data->hora}}.
</p><br>
@endforeach
<span>Agradecemos su puntual asistencia.</span><br>
<br>
<br>
<span>Atentamente,</span><br>
<br>
<br>
<section>
@foreach($coordina as $coord)
<b>{{$coord->nombre.' '. $coord->apellido}}</b><br> 
@endforeach
Coordinador de la FISC<br>
Centro Regional de Chiriquí<br>
</section>
<br>
<br>
<br>
<br>
<footer>
El Señor es mi Pastor, nada me falta. &nbsp;&nbsp;&nbsp;Salmo 23
</footer>
<br>
<br>
<br>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
        <td><img id="utp" src="uploads/avatars/logo_utp.jpg"></td>
        <td><img id="fisc" src="uploads/avatars/fisc_logo.png"></td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<header>
    Universidad Tecnológica de Panamá<br>
    Sede Chiriquí<br>
    Facultad de Ingeniería de Sistemas Computacionales<br>
</header>
<body>

<br>
<br>
<div>{{$data->codnota}}</div><br>
<br>
<span>David, {{$fecha}}</span><br>
<br>
<br>
<Section>
Ingeniero/a <br>
<strong>{{$profesor2->nombre.' '.$profesor2->apellido}}</strong><br>
Facultad de Ingeniería de Sistemas Computacionales<br>
UTP-Chiriquí<br>
E. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M.<br>
</Section>
<br>
<br>
<br>
<span>Respetado/a ingeniero/a {{$profesor2->apellido}}:</span><br>
<br>
<br>
<span>Reciba ante todo un cordial saludo, deseándole éxitos en sus funciones.</span><br>
<p>
    @foreach($anteproyecto as $ante)
Por este medio le comunico que ha sido designado como miembro del Tribunal Examinador para
evaluar el Trabajo de Graduación titulado: {{$ante->Nombre_anteproyecto}} de la estudiante {{$ante->Nombre_estudiante1}}. 
<br>
<br>
Para obtar por el título de {{$ante->Carrera}}.
<br>
La sustentación será el {{strftime("%A %d de %B de %Y", strtotime($ante->sustentationdate))}} a las {{$data->hora}}.
</p><br>
@endforeach
<span>Agradecemos su puntual asistencia.</span><br>
<br>
<br>
<span>Atentamente,</span><br>
<br>
<br>
<section>
@foreach($coordina as $coord)
<b>{{$coord->nombre.' '. $coord->apellido}}</b><br> 
@endforeach
Coordinador de la FISC<br>
Centro Regional de Chiriquí<br>
</section>
<br>
<br>
<br>
<br>
<footer>
El Señor es mi Pastor, nada me falta. &nbsp;&nbsp;&nbsp;Salmo 23
</footer>
</body>
</html>