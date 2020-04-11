@extends('layouts.template.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de estudiante</title>
    <link rel="stylesheet" href="{{asset('css/sol-style.css')}}">
</head>
<body>
<h1>Perfil de estudiante</h1>
<form action="{{url('profile/.id')}}" method="post" class="form-inline">
@csrf
{{method_field('PATCH')}}

<table class="table table-light">
        <tr>
        @foreach($datos_estudiante as $dato)
        @endforeach
            <td>Nombre:</td>
            <td>
                <input type="text" placeholder="Nombre" name="nombre" value="{{$dato->nombre}}" class="form-control" required>
            </td> 
        </tr>

        <tr>
            <td>Apellido:</td>
            <td><input type="text" placeholder="Apellido" name="apellido" value="{{$dato->apellido}}" class="form-control" required></td>
        </tr>

        <tr>
            <td>Cédula:</td>
            <td><input type="text" placeholder="Cédula" name="cedula" value="{{$dato->cedula}}" class="form-control" required></td>
        </tr>

        <tr>
            <td>Carrera:</td>
            <td colspan="2"><select name="id_carrera" class="form-control" required>
            <option selected value="">Elija su carrera...</option>
            @foreach($carreras as $carrera)
            <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
            @endforeach
            </select></td>
        </tr>

</table>

<input id="save-profile" type="submit" value="Actualizar" class="btn btn-primary btn-lg">

</form>
</body>
</html>

@endsection