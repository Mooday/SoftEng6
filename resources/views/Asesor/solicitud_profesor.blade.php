@extends('layouts.template.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud para profesor asesor</title>
    <link rel="stylesheet" href="{{asset('css/sol-style.css')}}">
</head>
<body>
<h1>Solicitud para profesor asesor</h1> <br>
<form id="form-prof-btn" action="{{url('solicitud/asesor')}}" method="post" enctype="multipart/form-data">
@csrf
<h2>Profesor</h2>

<table class="table table-striped table-sm">

    <tbody>
        <tr>
            <td>Nombre:</td>
            <td>
            @if(isset($profesor))
            <input type="text" name="id_profesor" value="{{$profesor->id}}" style="display:none">
            <input type="text" name="" value="{{$profesor->nombre.' '.$profesor->apellido}}" class="form-control" readonly="readonly">
            @else
            <input id="bot" type="text" value="" onkeydown="event.preventDefault()" class="form-control" required>
            @endif
            </td>
            <td id="tdbtnprof">
           <a id="ver_prof" class="btn btn-primary btn-lg" href="{{url('profesores')}}">Ver profesores</a>
            </td>
        </tr>
    </tbody>

</table>

<br>
<h2>Estudiante</h2>

<table class="table table-striped table-sm">

    <tbody>
        <tr>
            <td>Nombre:</td>
            @if(isset($estudiante))
            <input type="text" name="id_estudiante" value="{{$estudiante->id}}" style="display:none">
            <td><p>{{$estudiante->nombre.' '.$estudiante->apellido}}</p></td>
            @endif
            <td></td>
        </tr>

        <tr>
           <td>Cédula:</td>
           @if(isset($estudiante))
           <td><p>{{$estudiante->cedula}}</p></td>
           @else
           <td></td>
           @endif
           <td></td>
        </tr>

        <tr>
            <td>Carrera:</td>
            @if(isset($carrera))
            <td>{{$carrera->nombre}}</td>
            @else
            <td></td>
            @endif
            <td></td>
        </tr>

    </tbody>

</table><br>

<div>
    @if(isset($carrera))
        @if(isset($profesor))
        <input type="button" id="save-sol_p" value="Realizar solicitud" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#confirmar">

    <!-- Modal -->
    <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Solicitud para profesor asesor</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ¿Realizar solicitud?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" value="Confirmar">
        </div>
        </div>
    </div>
    </div>  
        @else
    <input type="submit" id="save-sol_p" class="btn btn-primary btn-lg" value="Realizar solicitud">
        @endif
    @else
    <fieldset disabled>
    <input type="submit" value="Realizar solicitud" class="btn btn-outline-success btn-lg"><br><br>
    <div class="alert alert-warning">Por favor actualice sus datos del <a class="alert-link" href="{{url('profile/'.Auth()->user()->id.'/edit')}}">perfil</a> antes de realizar la solicitud.<a class="close" data-dismiss="alert" href="">x</a></div><br>
    </fieldset>
    @endif
</div>

</form>
</body>
</html>

@endsection