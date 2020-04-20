@extends('layouts.template.template')
@section('content')
<h3>Solicitud para profesor asesor</h3>
<form action="{{url('solicitud/asesor/.Profesor_Asesor')}}" method="post">
@csrf
@method('PATCH')
<input type="text" name="id" value="{{$nota_prof_asesor->id}}" style="display:none">
<input type="text" name="id_estudiante" value="{{$estudiante->id}}" style="display:none">
<input type="text" name="id_profesor" value="{{$profesor->id}}" style="display:none">

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

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

            </table>
        </div>
    </div>
</div>

<div>
<input type="submit" value="Generar documento" class="btn btn-primary">
</div>
</form>
@endsection