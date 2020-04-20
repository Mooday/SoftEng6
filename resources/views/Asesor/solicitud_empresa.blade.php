@extends('layouts.template.template')
@section('content')
<h3>Solicitud para asesor de empresa</h3>

    <form action="{{url('guardar/empresa')}}" method="post">
    @csrf
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <tbody>
            <tr>
                <td>Nombre del asesor:</td>
                @if(isset($nota_emp_asesor))
                <td><input type="text" name="nombre_asesor" value="{{$nota_emp_asesor->nombre_asesor}}" class="form-control"></td>
                @else
                <td><input type="text" name="nombre_asesor" value="" class="form-control" required></td>
                @endif
            </tr>

            <tr>
            <td>Apellido del asesor:</td>
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
        </div>
    </div>
</div>

<div>
    @if(isset($carrera))
    <input type="button" value="Realizar solicitud" class="btn btn-primary" data-toggle="modal" data-target="#mimodal">

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
        <input type="submit" value="Realizar Solicitud" class="btn btn-primary"><br><br>
        <div class="alert alert-warning">Por favor actualice sus datos del <a class="alert-link" href="{{url('profile/'.Auth()->user()->id.'/edit')}}">perfil</a> antes de realizar la solicitud.<a class="close" data-dismiss="alert" href="">x</a></div><br>
        </fieldset>
    @endif
</div>
<br>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Solicitudes realizadas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tbody>
        <tr>
            <td>Asesor solicitado</td>
            <td>Empresa</td>
            <td>Fecha de solicitud</td>
        </tr>

     @foreach($solicitudes_empresa as $solicitud)
        <tr>
            <td>{{$solicitud->nombre_asesor.' '.$solicitud->apellido_asesor}}</td>
            <td>{{$solicitud->nombre_empresa}}</td>
            <td>{{$solicitud->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
            </table>
        </div>
    </div>
</div>

</form>
@endsection