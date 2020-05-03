@extends('layouts.template.template')

@section('content')
<h1 class="text-center">Editar registro</h1>
    

<div class="col-4 m-auto">
    <br>
    <br>
                                
    <form id="form-edit" action="{{route('updateactividad',$actividad->id )}}"  method="post"> 
        @method('put')
    @csrf<h5>Actividad</h5>
     <select  class="form-control" type="text" name="actividad" id="actividad" placeholder="actividad" required>
            <option value="{{$actividad->actividad ?? ''}}">{{$actividad->actividad ?? ''}}</option>
            <option value="Curso">Curso</option>
            <option value="Seminario">Seminario</option>, 
            <option value="Taller">Taller</option>
            <option value="Seminario-Taller">Seminario-Taller</option>
            <option value="Diplomados">Diplomados</option>
            <option value="Conferencia">Conferencia</option>
            <option value="Congresos">Congresos</option>
            <option value="Simposio">Simposio</option>
            <option value="Foro">Foro</option>
        </select>
           <h5>Modalidad</h5>
        <input class="form-control" type="text" name="modalidad" id="modalidad" placeholder="modalidad" value="{{$actividad->modalidad ?? ''}}"  required>  
            <h5>Fecha de ejecucion</h5>
        <input class="form-control" type="text" name="fecha_ejecucion" id="fecha_ejecucion" placeholder="fecha de ejecucion" value="{{$actividad->fecha_ejecucion ?? ''}}"  required> 
           <h5>total de horas</h5>
        <input class="form-control" type="text" name="total_hr" id="total_hr" placeholder="total de horas" value="{{$actividad->total_hr ?? ''}}"  required> 
             <h5>Numero de participantes</h5> 
        <input class="form-control" type="text" name="nu_participantes" id="nu_participantes" placeholder="numero de participantes" value="{{$actividad->nu_participantes ?? ''}}"  required> 
          <h5>Responssables</h5>
        <input class="form-control" type="text" name="responsables" id="responsables" placeholder="responsables" value="{{$actividad->responsables ?? ''}}"  required> 
       <h5>Observaciones</h5>
        <input class="form-control" type="text" name="observaciones" id="observaciones" placeholder="observaciones" value="{{$actividad->observaciones ?? ''}}"  required> 
        
       
        <input class="btn btn-primary" type="submit" value="Actualziar"> 
    </form> 
</div>
@endsection