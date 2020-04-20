@extends('layouts.template.template')
@section('content')
<h3>Solicitud para profesor asesor</h3>
<form action="{{url('solicitud/asesor')}}" method="post">
@csrf
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profesor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tbody>
        <tr>
            <td>Nombre:</td>
            <td>
            @if(isset($profesor))
            <input type="text" name="id_profesor" value="{{$profesor->id}}" style="display:none">
            <input type="text" name="" value="{{$profesor->nombre.' '.$profesor->apellido}}" class="form-control" readonly="readonly">
            @else
            <input type="text" value="" onkeydown="event.preventDefault()" class="form-control" required>
            @endif
            </td>
            <td>
           <a class="btn btn-primary" href="{{url('listado_profesores')}}">Ver Profesores</a>
            </td>
        </tr>
    </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Estudiante</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tbody>
        <tr>
            <td>Nombre:</td>
            @if(isset($estudiante))
            <input type="text" name="id_estudiante" value="{{$estudiante->id}}" style="display:none">
            <td><p>{{$estudiante->nombre.' '.$estudiante->apellido}}</p></td>
            @endif
        
        </tr>

        <tr>
           <td>Cédula:</td>
           @if(isset($estudiante))
           <td><p>{{$estudiante->cedula}}</p></td>
           @else
           <td></td>
           @endif
           
        </tr>

        <tr>
            <td>Carrera:</td>
            @if(isset($carrera))
            <td>{{$carrera->nombre}}</td>
            @else
            <td></td>
            @endif
           
        </tr>

    </tbody>
            </table>
        </div>
    </div>
</div>

<div>
    @if(isset($carrera))
        @if(isset($profesor))
        <input type="button" value="Realizar solicitud" class="btn btn-primary" data-toggle="modal" data-target="#confirmar">

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
    <input type="submit" class="btn btn-primary" value="Realizar solicitud">
        @endif
    @else
    <fieldset disabled>
    <input type="submit" value="Realizar solicitud" class="btn btn-primary"><br><br>
    <div class="alert alert-warning">Por favor actualice sus datos del <a class="alert-link" href="{{url('profile/'.Auth()->user()->id.'/edit')}}">perfil</a> antes de realizar la solicitud.<a class="close" data-dismiss="alert" href="">x</a></div><br>
    </fieldset>
    @endif
</div>
</form>
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
            <td>Fecha de solicitud</td>
        </tr>

     @foreach($solicitudes_profesor as $solicitud)
        @foreach($profesores as $profe)
            @if($profe->id == $solicitud->id_profesor)
        <tr>
            <td>{{$profe->nombre.' '.$profe->apellido}}</td>
            <td>{{$solicitud->created_at}}</td>
        </tr>
            @endif
        @endforeach
    @endforeach
    
    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection