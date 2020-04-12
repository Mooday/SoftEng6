@extends('layouts.template.template')
@section('content')
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Registro de Anteproyecto</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Registro de Anteproyecto">
    <meta name="description" content="Descripción de la WEB">    
    <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/>    
  </head>  
  <body>    
    <header>
        <h1>Registro de Anteproyectos</h1>      
    </header>    
    <section>      
      <article>
            <form method="post" action="{{url('registroestudiante')}}">
            @csrf
                <p>
                <label for="t1">Nombre del Anteproyecto</label><br/>
                <input type="text" name="Nombre_anteproyecto"/><br/>
                </p>
                <p>
                <label for="Tipo_Anteproyecto">Tipo de Anteproyecto</label><br/>
                <select name="Tipo_Anteproyecto" id="Tipo_Anteproyecto">
                @foreach($tipoantess as $tipoantes)
                <option value="{{$tipoantes->NombreTipo}}" name="Tipo_Anteproyecto">{{$tipoantes->NombreTipo}}</option>
                @endforeach
                </select>   
                </p>
                <p>
                <label for="t1">Nombre del Primer Estudiante</label><br/>
                <input type="text" name="Nombre_estudiante1"/><br/>
                </p>             
                <p>
                <label for="cedula">Cedula del Primer Estudiante</label><br/>
                <input type="text" name="Cedula_est1"/>
                </p>
                <p>
                <h8>IMPORTANTE: Solo debe colocar el nombre de un segundo estudiante si su Anteproyecto sera realizado por dos personas, de lo contrario, omita esta parte. Si su Anteproyecto es del tipo Práctica Profesional, también omita esta parte.</h8><br/>
                </p>
                <p>
                <label for="t1">Nombre del Segundo Estudiante</label><br/>
                <input type="text" name="Nombre_estudiante2"/><br/>
                </p>
                <h9>IMPORTANTE: Solo debe colocar la cédula de un segundo estudiante si su Anteproyecto será realizado por dos personas, de lo contrario, omita esta parte. Si su Anteproyecto es del tipo Práctica Profesional, también omita esta parte.</h9>
                <p>
                <label for="cedula">Cedula del Segundo Estudiante</label><br/>
                <input type="text" name="Cedula_est2"/><br/>
                </p>
                <p>
                <label for="carrera">Carrera</label><br/>
                <select name="carrera" id="carrera">
                @foreach($carreras as $carrera)
                <option value="{{$carrera->nombre}}" name="Carrera">{{$carrera->nombre}}</option>
                @endforeach
                </select>   
                </p>
                <p>
                <label for="asesor">Asesor</label><br/>
                <select name="Asesor" id="asesor">
                @foreach($profesores as $profesor)
                <option value="{{$profesor->nombre}} {{$profesor->apellido}}" name=Asesor>{{$profesor->nombre}} {{$profesor->apellido}}</option>
                @endforeach
                </select>   
                </p>
                <p>
                <h7>IMPORTANTE: El campo de Asesor de la Empresa solo debe ser llenado si su anteproyecto es de tipo Práctica Profesional</h7>
                </p>
                <p>
                <label for="cedula">Asesor de la Empresa</label><br/>
                <input type="text" name="Asesor_empresa"/><br/>
                </p>
                <p>
                <h7>IMPORTANTE: El campo de Nombre de la Empresa solo debe ser llenado si su anteproyecto es de tipo Práctica Profesional</h7>
                </p>
                <p>
                <label for="cedula">Nombre de la Empresa donde realizará la Practica Profesional</label><br/>
                <input type="text" name="Nombre_empresa"/><br/>
                </p>
                <p>
                <label for="estado">Selecione el Estado</label><br/>
                <select name="Estado" id="estado"><br/>
                @foreach($estadoss as $estado)
                <br/><option value="{{$estado->Nombre_estado}}" name=Estado>{{$estado->Nombre_estado}}</option><br/>
                @endforeach
                </p>
                <p>
                <br/><input type="submit" value="Registrar Anteproyecto"><br/>
                </p>
            </form>
        <div>          
        </div>
      </article>      
    </section>
  </body>  
</html>
@endsection