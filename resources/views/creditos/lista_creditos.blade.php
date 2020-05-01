@extends('layouts.template.template')
@section('content')
<h1 id="h1-center">Solicitud de Materias de 6 Créditos</h1>

<div class="card shadow mb-4">
   @can('is-user')
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Agregar Solicitud</h6>
  </div>
  @endcan
     @if(@isset($carrera))
         
    
   <div class="card-body">   
       <form action="{{route('store')}}" method="POST">
               @csrf
              <div class="form-group row">
                 <label for="name" class="col-md-2 col-form-label text-md-right">Nombre</label>
                 <div class="col-md-2">
                 <input type="text" name ="nombre" id="nombre" class="form-control" placeholder="nombre" value="{{$user->nombre." ".$user->apellido}}" required>
               </div>
               </div>
              <div class="form-group row">
                 <label for="name" class="col-md-2 col-form-label text-md-right">Cedula</label>
                 <div class="col-md-2">
                 <input type="text" name ="cedula" id="cedula" class="form-control" placeholder="cedula" value="{{$user->cedula}}"  required>
               </div>
               </div>
            <div class="form-group row">
               <label for="name" class="col-md-2 col-form-label text-md-right">Carrera</label>
               <div class="col-md-2">
               <input type="text" name ="carrera" id="carrera" class="form-control" placeholder="carrera" value="{{$carrera->nombre}}" required>
            </div>   
            </div>
            <div class="form-group  row">
               <label for="name" class="col-md-2 col-form-label text-md-right">Email</label>
               <div class="col-md-2">
               <input type="text" name ="email" id="email" class="form-control" placeholder="email"  value="{{$user->correo}}" required>
            </div>
            </div>
            <div class="form-group row">
               <label for="name" class="col-md-2 col-form-label text-md-right">Teléfono</label>
               <div class="col-md-2">
               <input type="text" name ="telefono" id="teléfono" class="form-control" placeholder="telefono" value="{{$user->telefono}}"  required>
            </div>   
            </div>
            <button type="submit" class="btn btn-primary float-left ">guardar</button>
           </form>
           @if (session('agregar'))
               <div class="alert alert-success mt-3">
                  {{session('agregar')}}
               </div>
           @endif   
   </div>  
   
   @else
   @can('is-user')
   <div class="alert alert-warning">Por favor actualice sus datos del <a class="alert-link" href="{{url('profile/'.Auth()->user()->id.'/edit')}}">perfil</a> antes de realizar la solicitud.<a class="close" data-dismiss="alert" href="">x</a></div>
@endcan
   @endif
</div>
  
  
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">solicitud realizada</h6>
  </div>
<div class="card-body">
<div class="table-responsive">
<div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
   <thead>
   <tr>
       <th>nombre</th>
       <th>cedula</th>
       <th>carrera</th>
       <th>telefono</th>
       <th>email</th>
       <th>fecha</th>
       <th>estatus</th>
       @can('manage-users')
       <th>	Actions</th>
       @endcan
   </tr>
</thead>
   @foreach ($ver as $item)
   @can('manage-users')
   <tbody>
                   <tr>
                   
                   <td>{{$item->nombre}}</td>   
                   <td>{{$item->cedula}}</td>
                   <td>{{$item->carrera}}</td>
                   <td>{{$item->telefono}}</td>
                   <td>{{$item->email}}</td>
                   <td>{{$item->created_at}}</td>
                   <td>{{$item->estatus}}</td>
                   @can('manage-users')
                   <td>
                     <a href="{{route('editar', $item->id)}}" class="btn btn-warning">editar</a>
                    @endcan
                     </td>
                   </tr>    
   </tbody>
   @endcan
   @can('is-user')
   @if ($item->cedula==$user->cedula)
   <tbody>
      <tr>
      
      <td>{{$item->nombre}}</td>   
      <td>{{$item->cedula}}</td>
      <td>{{$item->carrera}}</td>
      <td>{{$item->telefono}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->estatus}}</td>
      @can('manage-users')
      <td>
        <a href="{{route('editar', $item->id)}}" class="btn btn-warning">editar</a>
       @endcan
        </td>
      </tr>    
</tbody>
   @endif
   @endcan
               @endforeach
                  </table>
 </div>
</div>              
 </div>
</div>
@endsection