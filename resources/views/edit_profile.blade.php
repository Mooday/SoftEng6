@extends('layouts.template.template')
@section('content')
<h3>Perfil de estudiante</h3>
<form action="{{url('profile/.id')}}" method="post">
@csrf
{{method_field('PATCH')}}
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-light" id="dataTable" width="100%" cellspacing="0">
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
        </div>
    </div>
</div>

<input type="submit" value="Actualizar" class="btn btn-primary">

</form>
@endsection