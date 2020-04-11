@extends('layouts.template.template')
@section('content')
<h3 class="text-center mb-3 pt-3">editar solicitud{{$solicitud6creditosactualizar->id}}</h3>
<form action="{{route('update',$solicitud6creditosactualizar->id )}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-grup">
    <input type="text" name="nombre" id="nombre" value="{{$solicitud6creditosactualizar->nombre}}" class="form-control" required>
    </div>
    <div class="form-grup">
        <input type="text" name="cedula" id="cedula" value="{{$solicitud6creditosactualizar->cedula}}" class="form-control" required>
    </div>
    <div class="form-grup">
        <input type="text" name="carrera" id="carrera" value="{{$solicitud6creditosactualizar->carrera}}" class="form-control" required>
    </div>
    <div class="form-grup">
        <input type="text" name="email" id="email" value="{{$solicitud6creditosactualizar->email}}" class="form-control" required>
    </div>
    <div class="form-grup">
        <input type="text" name="telefono" id="telefono" value="{{$solicitud6creditosactualizar->telefono}}" class="form-control" required>
    </div>
    
    <div class="form-grup">
        <input type="text" name="estatus" id="estatus" value="{{$solicitud6creditosactualizar->estatus}}" class="form-control" required>
    </div>
    
    <button type="submit" class="btm btn-warning btn-block">editar</button>
</form>
@if (session('update'))
<div class="alert alert-success mt-3">
    {{session('update')}}
</div>
@endif
@endsection