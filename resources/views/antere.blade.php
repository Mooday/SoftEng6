@extends('layouts.template.template')
@section('content')
<!DOCTYPE html>
<html lang="es">  
<head>
<title>Anteproyectos Registrados</title>
</head>
<header>
    <h1>Anteproyectos Registrados</h1>      
</header> 
<body>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del Proyecto</th>
            <th>Tipo de Anteproyecto</th>
            <th>Nombre del primer Estudiante</th>
            <th>Cedula del primer Estudiante</th>
            <th>Nombre del segundo Estudiatne</th>
            <th>Cedula del segundo Estidoante</th>
            <th>Asesor de la Universidad</th>
            <th>Asesor de la Empresa</th>
            <th>Nombre de la Empresa</th>
            <th>Carrera</th>            
            <th>Fecha de Registro</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($ejemplos as $ejemplo)
        <tr>
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ejemplo->Nombre_anteproyecto}}</td>
            <td>{{$ejemplo->Tipo_Anteproyecto}}</td>
            <td>{{$ejemplo->Nombre_estudiante1}}</td>
            <td>{{$ejemplo->Cedula_est1}}</td>
            <td>{{$ejemplo->Nombre_estudiante2}}</td>
            <td>{{$ejemplo->Cedula_est2}}</td>
            <td>{{$ejemplo->Asesor}}</td>
            <td>{{$ejemplo->Asesor_empresa}}</td>
            <td>{{$ejemplo->Nombre_empresa}}</td>
            <td>{{$ejemplo->Carrera}}</td>        
            <td>{{$ejemplo->created_at}}</td>
            <td>{{$ejemplo->Estado}}</td>
            <td><a href="{{url('/anteproyectosregistrados/'.$ejemplo->id.'/edit')}}">Editar</a>  | Borrar | <a href="{{url('imprimir-pdf')}}"> Generar PDF</a></td>
        </tr>
        </tr>
        @endforeach
    </tbody>
</table>
{{$ejemplos->links()}}
</body>
</html>
@endsection