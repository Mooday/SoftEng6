@extends('layouts.template.template')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2 class="text-center">INFORME DE ACTIVIDADES DE EXTENSIÓN REALIZADAS </h2>
    <h3 class="text-center">Universidad, Empresa, Convenios, Asesorías, Consultorías</h3>
  </div>
  
  <div class="card-body">

    <div class="table-responsive">
            <a href="{{route('actividad2.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm">
                <i class="fas fa-file-alt"></i>
                Crear nuevo registro
            </a>
            <a href="{{route('todo2')}}" class="d-none d-sm-inline-block btn btn-sm btn-info bg-gradient-info shadow-sm">
              <i class="fas fa-list-ul"></i>
              Todos los elementos
            </a>
            <a href="{{route('resusita2')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm">
              <i class="fas fa-trash-restore-alt"></i>
              </i>
             elementos eliminados
            </a>
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
            <thead class="thead-dark">
              <tr>
                <th scope="col">Empresa</th>
                <th scope="col">Tipo de Vinculacion</th>
                <th scope="col">Actividades realizadas</th>
                <th scope="col">Total de Beneficiarios </th>
                <th scope="col">Responsables</th>
                <th scope="col">Observaciones</th>

                <th scope="col">Acciones</th>
              </tr>
            </thead>
            @foreach ( $actividad as $actividades )
            <tbody>
                  <tr>
                    <th scope="row">{{$actividades->Empresa}}</th>
                    <td>{{$actividades->tipo_vinculacion}}</td>
                    <td>{{$actividades->actividad}}</td>
                    <td>{{$actividades->total_beneficiarios}}</td>
                    <td>{{$actividades->responsables}}</td>
                    <td>{{$actividades->observaciones}}</td>
                   <td>
                     @if(isset($tiempo))
                        <a href="{{route('eliminasiempre2', $actividades ?? ''->id)}}"class="d-none d-sm-inline-block btn btn-sm btn-danger bg-gradient-danger shadow-sm"  >
                         
                          elimiar permanente
                        </a>
                     @else
                        <a href="{{route('eliminaactividad2', $actividades ?? ''->id)}}" class="btn btn-danger btn-circle">
                          <i class="fas fa-trash"></i>
                         
                        </a>


                        <a href="{{route('editaractividad2', $actividades ?? ''->id)}}" class="btn btn-info btn-circle">
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