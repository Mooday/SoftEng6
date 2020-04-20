@extends('layouts.template.template')

@section('content')
<h1 class="text-center">Editar registro</h1>
    

<div class="col-4 m-auto">
    <br>
    <br>
                                
    <form id="form-edit" action="{{route('updateactividad2',$actividad->id )}}"  method="post"> 
        @method('put')
    @csrf<h5>Empresa</h5>
        <input class="form-control" type="text" name="Empresa" id="Empresa" placeholder="Empresa" value="{{$actividad->Empresa ?? ''}}"  required>  
            <h5>Fecha de ejecucion</h5>
        <input class="form-control" type="text" name="tipo_vinculacion" id="tipo_vinculacion" placeholder="tipo de vinculacion" value="{{$actividad->tipo_vinculacion ?? ''}}"  required>   
            <h5>Actividad</h5>
        <input class="form-control" type="text" name="actividad" id="actividad" placeholder="actividad" value="{{$actividad->actividad ?? ''}}"  required>  
           <h5>	total de beneficiarios</h5>
        <input class="form-control" type="text" name="total_beneficiarios" id="total_beneficiarios" placeholder="total_beneficiarios" value="{{$actividad->total_beneficiarios ?? ''}}"  required> 
             <h5>Responssables</h5>
        <input class="form-control" type="text" name="responsables" id="responsables" placeholder="responsables" value="{{$actividad->responsables ?? ''}}"  required> 
       <h5>Observaciones</h5>
        <input class="form-control" type="text" name="observaciones" id="observaciones" placeholder="observaciones" value="{{$actividad->observaciones ?? ''}}"  required> 
        
       
        <input class="btn btn-primary" type="submit" value="Actualziar"> 
    </form> 
</div>
@endsection