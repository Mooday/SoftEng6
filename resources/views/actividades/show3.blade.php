@extends('layouts.template.template')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="text-center">INFORME DE ACTIVIDADES DE EXTENSIÓN REALIZADAS </h2>
    <h3 class="text-center">Otras actividades (Servicios, Promoción Cultural, Acción Social, Egresados, Otros)</h3>
  </div>
  
  <div class="card-body">
      @if(isset($tiempo))
    
    @else
    <form  id="form-emp" action="{{url('buscaactividad3')}}"  method="post"> 
      @csrf
        <select  class="form col-2 m-auto" type="text" name="sactividad" id="sactividad" required>
            <option value="Servicio">Servicio</option>
            <option value="Promoción Cultural">Promoción Cultural</option>, 
            <option value="Acción Social">Acción Social</option>
            <option value="Egresados">Egresados</option>
            <option value="Otros">Otros</option>
      </select>
       <input class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-warning shadow-sm "  type="submit" value="Buscar">
     </form> 
    
     @endif

    <div class="table-responsive">
            <a href="{{route('actividad3.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm">
                <i class="fas fa-file-alt"></i>
                Crear nuevo registro
            </a>
            <a href="{{route('todo3')}}" class="d-none d-sm-inline-block btn btn-sm btn-info bg-gradient-info shadow-sm">
              <i class="fas fa-list-ul"></i>
              Todos los elementos
            </a>
            <a href="{{route('resusita3')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm">
              <i class="fas fa-trash-restore-alt"></i>
              </i>
             Elementos eliminados
            </a>
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
            <thead>
              <tr>
                <th scope="col">Actividad</th>
                <th scope="col">Fecha ejecucion</th>
                <th scope="col">Total horas</th>
                <th scope="col">Numero de participantes</th>
                <th scope="col">Responsables</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            @foreach ( $actividad as $actividades )
            <tbody>
                  <tr>
                    <th>{{$actividades->actividad}}</th>
                    <td>{{$actividades->fecha_ejecucion}}</td>
                    <td>{{$actividades->total_hr}}</td>
                    <td>{{$actividades->nu_participantes}}</td>
                    <td>{{$actividades->responsables}}</td>
                    <td>{{$actividades->observaciones}}</td>
                   <td>
                     @if(isset($tiempo))
                        <a href="{{route('eliminasiempre3', $actividades ?? ''->id)}}"class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm" onclick="return confirm('Esta seguro que desea eliminar este elemento permanetemente?')" >
                         
                          Eliminar
                        </a>
                        <a href="{{route('restaurar3', $actividades ?? ''->id)}}"class="d-none d-sm-inline-block btn btn-sm btn-info bg-gradient-info shadow-sm" onclick="return confirm('Esta seguro que desea Restaurar este elemento?')" >
                         
                          Restaurar...
                        </a>
                     @else
                        <a href="{{route('eliminaactividad3', $actividades ?? ''->id)}}" class="btn btn-danger btn-circle" onclick="return confirm('Esta seguro que desea eliminar este elemento?')">
                          <i class="fas fa-trash"></i>
                         
                        </a>


                        <a href="{{route('editaractividad3', $actividades ?? ''->id)}}" class="btn btn-info btn-circle">
                          <i class="fas fa-edit"></i>
                        </a>
                     @endif
                     
                  
                   </td>
                  </tr>
              @endforeach
              
              
            </tbody>
          </table>
        </div>  
    </div>        
</div>
@endsection