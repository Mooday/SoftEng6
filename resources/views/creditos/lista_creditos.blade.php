@extends('layouts.template.template')
@section('content')
<h1 id="h1-center">Solicitudes de materias de 6 creditos</h1>
<div class="row">
   <div class="col-md-7">
       <div class="col-md-5">
           <h3 class="text-center mb-4" >agregar</h3>
       <form action="{{route('store')}}" method="POST">
               @csrf
              <div class="form-group">
                 <input type="text" name ="nombre" id="nombre" class="form.control" placeholder="nombre" required>
              </div>
              <div class="form-group">
               <input type="text" name ="cedula" id="cedula" class="form.control" placeholder="cedula" required>
            </div>
            <div class="form-group">
               <input type="text" name ="carrera" id="carrera" class="form.control" placeholder="carrera" required>
            </div>
            <div class="form-group">
               <input type="text" name ="email" id="email" class="form.control" placeholder="email" required>
            </div>
            <div class="form-group">
               <input type="text" name ="telefono" id="telefono" class="form.control" placeholder="telefono" required>
            </div>
            <button type="submit" class="btn btn-success btn-block ">guardar</button>
           </form>
           @if (session('agregar'))
               <div class="alert alert-success mt-3">
                  {{session('agregar')}}
               </div>
           @endif   
       </div>
       
   </div>
  
</div>
<table class="table">
   <tr>
      
       <th>nombre</th>
       <th>cedula</th>
       <th>carrera</th>
       <th>telefono</th>
       <th>email</th>
       <th>estatus</th>
       @can('manage-users')
       <th>acciones</th>
       @endcan
   </tr>
   @foreach ($ver as $item)
                   <tr>
                   
                   <td>{{$item->nombre}}</td>   
                   <td>{{$item->cedula}}</td>
                   <td>{{$item->carrera}}</td>
                   <td>{{$item->telefono}}</td>
                   <td>{{$item->email}}</td>
                   <td>{{$item->estatus}}</td>
                   <td>
                     <a href="{{route('editar', $item->id)}}" class="btn btn-warning">editar</a>
                     
                     </td>
                   </tr>    
               @endforeach


@endsection