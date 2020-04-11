@extends('layouts.template.template')
@section('content')

<link rel="stylesheet" href="{{asset('css/sol-style.css')}}">
<a href="javascript:history.back()"><img src="{{asset('img/btn-atras.png')}}" width="40" height="40"></a>
<h1>Datos de la solicitud</h1><br>

<form id="dt-sol-prof" action="{{url('solicitud/asesor/.Profesor_Asesor')}}" method="post">
@csrf
@method('PATCH')
<input type="text" name="id" value="{{$nota_prof_asesor->id}}" style="display:none">
<input type="text" name="id_estudiante" value="{{$estudiante->id}}" style="display:none">
<input type="text" name="id_profesor" value="{{$profesor->id}}" style="display:none">

<table class="table table-striped table-sm">

    <tbody>
        <tr>
            <td>Estudiante:</td>
            <td>{{$estudiante->nombre.' '.$estudiante->apellido}}</td>
            
        </tr>

        <tr>
            <td>Cédula:</td>
            <td>{{$estudiante->cedula}}</td>
        </tr>

        <tr>

        <tr>
            <td>Carrera:</td>
            <td>{{$carrera->nombre}}</td>
        </tr>

            <td>Profesor Asesor:</td>
            <td>{{$profesor->nombre.' '.$profesor->apellido}}</td>
        </tr>

        <tr>
            <td>Código de nota:</td>
            <td><input type="text" name="codigo" class="form-control" required></td>
        </tr>
       
    </tbody>

</table><br>

<div>
<input id="pdf-prof" type="submit" value="Generar documento" class="btn btn-primary btn-lg">
</div>
</form>

@endsection