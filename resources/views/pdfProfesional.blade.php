<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Profesional</title>
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
<br>
<span>David, {{$fechas}}</span><br>
<br>
<br>
<Section>
Ingeniero/a <br>
<strong>{{$vicedecan->nombre.' '.$vicedecan->apellido}}</strong><br>
<strong>{{$vicedecan->cargo}}</strong><br>
Facultad de Ingeniería de Sistemas Computacionales<br>
Universidad Tecnológica de Panamá<br>
E. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D.<br>
</Section>
<br>
<br>
<br>
<span>Respetado/a ingeniero/a {{$vicedecan->apellido}}:</span><br>
<br>
<br>
<span>Reciba ante todo un cordial saludo, deseándole éxitos en sus funciones.</span><br>
<p>
Estamos enviando el anteproyecto de Trabajo de Graduación 
{{$antess->Nombre_anteproyecto}},
de el/la jóven {{$antess->Nombre_estudiante1.' '.$antess->Cedula_est1}} estudiante de la 
carrera de {{$antess->Carrera}}, FISC-Chiriquí; 
asesorado por {{$antess->Asesor}}, la Práctica Profesional sera realizada en la empresa {{$antess->Nombre_empresa}} y el asesor/a de la empresa es {{$antess->Asesor_empresa}}.
</p><br>
<span>Agradeciendo su amable atención, queda de usted.</span><br>
<br>
<br>
<span>Atentamente,</span><br>
<br>
<br>
<section>
<b><br></b><br>
Dr. Juan José Saldaña B.<br>
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