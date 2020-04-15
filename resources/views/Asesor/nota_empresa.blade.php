@extends('layouts.template.template')
@section('content')
<h3>Solicitud para asesor de empresa</h3>

<form id="form-emp" action="{{url('empresapdf')}}" method="post">
@csrf

<input type="text" name="id" value="{{$nota_emp_asesor->id}}" style="display:none">

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

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

            </table>
        </div>
    </div>
</div>

<div>
<input id="pdf-emp" type="submit" value="Generar documento" class="btn btn-primary btn-lg">
</div>
</form>

@endsection