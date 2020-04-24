<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Boletines</title>
    <style type="text/css">
    	body {
			margin: 2em;
			color: #000;
			background-color: #fff;
    	}
    	.container{

    	}
    	.encabezadoboletin {
				text-align: center;
				font-family: arial;

			}

			.tablainformacion {
				font-size: 22px;
				width: 100%;
                border: 1px;
                float: center;
            }


    </style>
  </head>

  <body>
    <div class="contenido">

	        	<div class="encabezadoboletin">
	        		<h3>FECHAS DE SUSTENTACIÓN ACTIVAS</br>

	            </div>



                <table class="tablainformacion">
                    <thead>
                    <tr>
                        <th align="center">Identificación</th>
                        <th>Nombre Estudiante 1</th>
                        <th>Nombre Estudiante 2</th>
                        <th align="center">Proyecto</th>
                        <th align="center">Carrera</th>
                        <th align="center">Fecha Solicitud</th>
                        <th align="center">Fecha Última modificación</th>
                        <th align="center">Estado Actual</th>
                        <th align="center">Fecha Sustentación</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($fechassustentacion as $fechasus)
                    <tr>
                        <td align="center">
                            @foreach ($proyectos as $proyecto)
                                @if ($proyecto->id == $fechasus->id_anteproyecto)
                                    {{$proyecto->id}}
                                @endif
                            @endforeach
                        </td>
                        <td align="center">
                            @foreach ($proyectos as $proyecto)
                                @if ($proyecto->id == $fechasus->id_anteproyecto)
                                    {{$proyecto->Nombre_estudiante1}}
                                @endif
                            @endforeach
                        </td>
                        <td align="center">
                            @foreach ($proyectos as $proyecto)
                                @if ($proyecto->id == $fechasus->id_anteproyecto)
                                    {{$proyecto->Nombre_estudiante2}}
                                @endif
                            @endforeach
                        </td>
                        <td align="center">
                            @foreach ($proyectos as $proyecto)
                                @if ($proyecto->id == $fechasus->id_anteproyecto)
                                    {{$proyecto->Nombre_anteproyecto}}
                                @endif
                            @endforeach
                        </td>
                        <td align="center">
                            @foreach ($carreras as $carrera)
                                @if ($carrera->id == $fechasus->id_carrera)
                                    {{$carrera->nombre}}
                                @endif
                            @endforeach
                        </td>

                        <td align="center">{{$fechasus->created_at}}</td>
                        <td align="center">{{$fechasus->updated_at}}</td>
                        <td align="center">{{$fechasus->estate}}</td>
                        <td align="center">{{$fechasus->sustentationdate}}</td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
    </div> <!-- /container -->
  </body>
</html>

