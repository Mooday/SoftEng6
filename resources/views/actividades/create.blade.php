@extends('layouts.template.template')

@section('content')
<h2 class="text-center">crear nuevo registro</h2>
    

<div class="col-4 m-auto">
    
   
   
    <form id="form-emp" action="{{url('almacenaactividad')}}"  method="post"> 
    @csrf
    
    <br>
         
    <h5>Seleccione una actividad</h5>
        <select  class="form-control" type="text" name="actividad" id="actividad" placeholder="actividad" required>
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
        <br>
        <input class="form-control" type="text" name="modalidad" id="modalidad" placeholder="modalidad" required>  
        <br>
        <input class="form-control" type="text" name="fecha_ejecucion" id="fecha_ejecucion" placeholder=" fecha dd/mm/aaaa" required> 
        <br>
        <input class="form-control" type="text" name="total_hr" id="total_hr" placeholder="total de horas" required> 
        <br>
        <input class="form-control" type="text" name="nu_participantes" id="nu_participantes" placeholder="numero de participantes" required> 
        <br>
        <input class="form-control" type="text" name="responsables" id="responsables" placeholder="responsables" required> 
        <br>
        <input class="form-control" type="text" name="observaciones" id="observaciones" placeholder="observaciones" required> 
        <br>
         
        <input class="btn btn-primary" type="submit" value="crear"> 
    </form> 
</div>
@endsection