@extends('layouts.template.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de asesor de empresa</title>
    <link rel="stylesheet" href="{{asset('css/sol-style.css')}}">
</head>
<body>
<h1>Solicitud para asesor de empresa</h1>
    <form id="form-emp-btn" action="{{url('guardar/empresa')}}" method="post">
    @csrf

    <table class="table table-striped table-sm">

        <tbody>
            <tr>
                <td>Nombre:</td>
                @if(isset($nota_emp_asesor))
                <td><input type="text" name="nombre_asesor" value="{{$nota_emp_asesor->nombre_asesor}}" class="form-control"></td>
                @else
                <td><input type="text" name="nombre_asesor" value="" class="form-control" required></td>
                @endif
            </tr>

            <tr>
            <td>Apellido:</td>
                @if(isset ($nota_emp_asesor))
                <td><input type="text" name="apellido_asesor" value="{{$nota_emp_asesor->apellido_asesor}}" class="form-control"></td>
                @else
                <td><input type="text" name="apellido_asesor" value="" class="form-control" required></td>
                @endif 
            </tr>

            <tr>
                <td>Empresa:</td>
                @if(isset($nota_emp_asesor))
                <td><input type="text" name="nombre_empresa" value="{{$nota_emp_asesor->nombre_empresa}}" class="form-control"></td>
                @else
                <td><input type="text" id="emp" name="nombre_empresa" class="form-control" required></td>
                @endif
            </tr>

            <tr>
                <td>Estudiante:</td>
                <input type="text" name="id_estudiante" value="{{$estudiante->id}}" style="display:none">
                <td>{{$estudiante->nombre.' '.$estudiante->apellido}}</td>
            </tr>

            <tr>
                <td>Cédula:</td>
                <td>{{$estudiante->cedula}}</td>
            </tr>

            <tr>
                <td>Carrera:</td>
                @if(isset($carrera))
                <td>{{$carrera->nombre}}</td>
                @endif
            </tr>

        </tbody>

    </table>
<br>

<div>
    @if(isset($carrera))
    <input type="button" id="save-sol_p" value="Realizar solicitud" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mimodal">

    <!-- Modal -->
    <div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Solicitud para asesor de empresa</h4>
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
        <fieldset disabled>
        <input type="submit" value="Realizar Solicitud" class="btn btn-outline-success btn-lg"><br><br>
        <div class="alert alert-warning">Por favor actualice sus datos del <a class="alert-link" href="{{url('profile/'.Auth()->user()->id.'/edit')}}">perfil</a> antes de realizar la solicitud.<a class="close" data-dismiss="alert" href="">x</a></div><br>
        </fieldset>
    @endif
</div>

</form>
</body>
</html>

@endsection