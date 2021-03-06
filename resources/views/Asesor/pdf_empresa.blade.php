<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud Asesor de Empresa</title>
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
<div>{{$nota_emp_asesor->codigo}}</div><br>
<br>
<span>David, {{$fecha}}</span><br>
<br>
<br>
<Section>
Ingeniero/a <br>
<strong>{{$nota_emp_asesor->nombre_asesor.' '.$nota_emp_asesor->apellido_asesor}}</strong><br>
<strong>{{$nota_emp_asesor->nombre_empresa}}</strong><br>
E. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D.<br>
</Section>
<br>
<br>
<br>
<span>Respetado/a ingeniero/a {{$nota_emp_asesor->apellido_asesor}}:</span><br>
<br>
<br>
<span>Reciba ante todo un cordial saludo, deseándole éxitos en sus funciones.</span><br>
<p>
Por este medio le comunico que el estudiante {{$estudiante->nombre.' '.$estudiante->apellido}} 
con cédula {{$estudiante->cedula}} de la facultad de Ingeniería de Sistemas Computacionales, requiere 
su colaboración para ejercer como asesor dentro de la empresa, para el anteproyecto de su trabajo de graduación, 
el cual será realizado en sus instalaciones, para optar por el título de {{$carrera->nombre}}.
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
