@extends('layouts.template.template')

@section('content')
<h2 class="text-center">crear nuevo registro</h2>
    

<div class="col-4 m-auto">
    
   
   
    <form id="form-emp" action="{{url('almacenaactividad2')}}"  method="post"> 
    @csrf
    
    <br>
      
        <input class="form-control" type="text" name="empresa" id="empresa" placeholder="Empresa" required>  
        <br>
        <input class="form-control" type="text" name="tipo_vinculacion" id="tipo_vinculacion" placeholder="tipo de vinculacion" required> 
        <br>
        <input class="form-control" type="text" name="actividad" id="actividad" placeholder="actividad" required>  
        <br>
        <input class="form-control" type="text" name="Total_Beneficiarios" id="Total_Beneficiarios" placeholder="Total de Beneficiarios" required> 
        <br>
        <input class="form-control" type="text" name="responsables" id="responsables" placeholder="responsable" required> 
        <br>
        <input class="form-control" type="text" name="observaciones" id="observaciones" placeholder="observaciones" required> 
        <br>
         
        <input class="btn btn-primary" type="submit" value="crear"> 
    </form> 
</div>
@endsection