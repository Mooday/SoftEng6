<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud Profesor Asesor</title>
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
<div>{{$nota_prof_asesor->codigo}}</div><br>
<br>
<span>David, {{$fecha}}</span><br>
<br>
<br>
<Section>
Ingeniero/a <br>
<strong>{{$profesor->nombre.' '.$profesor->apellido}}</strong><br>
Facultad de Ingeniería de Sistemas Computacionales<br>
Universidad Tecnológica de Panamá<br>
E. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D.<br>
</Section>
<br>
<br>
<br>
<span>Respetado/a ingeniero/a {{$profesor->apellido}}:</span><br>
<br>
<br>
<span>Reciba ante todo un cordial saludo, deseándole éxitos en sus funciones.</span><br>
<p>
Por este medio le comunico que el estudiante {{$estudiante->nombre.' '.$estudiante->apellido}} 
con cédula {{$estudiante->cedula}} de la facultad de Ingeniería de Sistemas Computacionales, requiere 
su colaboración como asesor de su anteproyecto de trabajo de graduación, para optar por el título de 
{{$carrera->nombre}}.
</p><br>
<span>Agradeciendo su amable atención, queda de usted.</span><br>
<br>
<br>
<span>Atentamente,</span><br>
<br>
<br>
<section>
<b>{{$coordinador->nombre.' '. $coordinador->apellido}}</b><br> 
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
