@extends('layouts.template.template')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="text-center">INFORME DE ACTIVIDADES DE EXTENSIÓN REALIZADAS </h2>
    <h3 class="text-center">Educación continua</h3>
  </div>
  
  <div class="card-body">

    <div class="table-responsive">
            <a href="{{route('actividad.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm">
                <i class="fas fa-file-alt"></i>
                Crear nuevo registro
            </a>
            <a href="{{route('todo')}}" class="d-none d-sm-inline-block btn btn-sm btn-info bg-gradient-info shadow-sm">
              <i class="fas fa-list-ul"></i>
              Todos los elementos
            </a>
            <a href="{{route('resusita')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm">
              <i class="fas fa-trash-restore-alt"></i>
              </i>
             elementos eliminados
            </a>
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
            <thead class="thead-dark">
              <tr>
                <th scope="col">Actividad</th>
                <th scope="col">Modalidad</th>
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
                    <th scope="row">{{$actividades->actividad}}</th>
                    <td>{{$actividades->modalidad}}</td>
                    <td>{{$actividades->fecha_ejecucion}}</td>
                    <td>{{$actividades->total_hr}}</td>
                    <td>{{$actividades->nu_participantes}}</td>
                    <td>{{$actividades->responsables}}</td>
                    <td>{{$actividades->observaciones}}</td>
                   <td>
                     @if(isset($tiempo))
                        <a href="{{route('eliminasiempre', $actividades ?? ''->id)}}"class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm"  >
                         
                          elimiar permanente
                        </a>
                     @else
                        <a href="{{route('eliminaactividad', $actividades ?? ''->id)}}" class="btn btn-danger btn-circle">
                          <i class="fas fa-trash"></i>
                         
                        </a>


                        <a href="{{route('editaractividad', $actividades ?? ''->id)}}" class="btn btn-info btn-circle">
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