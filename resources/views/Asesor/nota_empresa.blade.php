@extends('layouts.template.template')
@section('content')

<link rel="stylesheet" href="{{asset('css/sol-style.css')}}">
<a href="javascript:history.back()"><img src="{{asset('img/btn-atras.png')}}" width="40" height="40"></a>
<h1>Datos de la solicitud</h1><br>

<form id="form-emp" action="{{url('empresapdf')}}" method="post">
@csrf

<input type="text" name="id" value="{{$nota_emp_asesor->id}}" style="display:none">
<table class="table table-striped table-sm">

    <tbody>
        <tr>
            <td>Nombre de asesor:</td>
            <td>{{$nota_emp_asesor->nombre_asesor.' '.$nota_emp_asesor->apellido_asesor}}</td>
        </tr>

        <tr>
            <td>Nombre de empresa:</td>
            <td>{{$nota_emp_asesor->nombre_empresa}}</td>
        </tr>

        <tr>
            <td>Estudiante:</td>
            <td>{{$estudiante->nombre.' '.$estudiante->apellido}}</td>
        </tr>

        <tr>
            <td>Cédula:</td>
            <td>{{$estudiante->cedula}}</td>
        </tr>

        <tr>
            <td>Carrera:</td>
            <td>{{$carrera->nombre}}</td>
        </tr>

        <tr>
            <td>Código de nota:</td>
            <td><input type="text" name="codigo" class="form-control" required></td>
        </tr>


    </tbody>

</table><br>

<div>
<input id="pdf-emp" type="submit" value="Generar documento" class="btn btn-primary btn-lg">
</div>
</form>

@endsection