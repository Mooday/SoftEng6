@extends('layouts.template.template')
@section('content')
<h1 >editar solicitud </h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar Datos</h6>
    </div>
    <div class="card-body">     
<form action="{{route('update',$solicitud6creditosactualizar->id )}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-grup row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Nombre</label>   
        <div class="col-md-2">
    <input type="text" name="nombre" id="nombre" value="{{$solicitud6creditosactualizar->nombre}}" class="form-control" required>
</div>
</div>
    <div class="form-grup row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Cédula</label>
        <div class="col-md-2">
        <input type="text" name="cedula" id="cedula" value="{{$solicitud6creditosactualizar->cedula}}" class="form-control" required>
    </div>
    </div>
    <div class="form-grup row ">
        <label for="name" class="col-md-2 col-form-label text-md-right">Carrera</label>
        <div class="col-md-2">
        <input type="text" name="carrera" id="carrera" value="{{$solicitud6creditosactualizar->carrera}}" class="form-control" required>
    </div>
    </div>
    <div class="form-grup row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Email</label>
        <div class="col-md-2">
        <input type="text" name="email" id="email" value="{{$solicitud6creditosactualizar->email}}" class="form-control" required>
    </div>
    </div>
    <div class="form-grup row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Teléfono</label>
        <div class="col-md-2">
        <input type="text" name="telefono" id="telefono" value="{{$solicitud6creditosactualizar->telefono}}" class="form-control" required>
    </div>
</div>
    <div class="form-grup row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Estatus</label>
        <div class="col-md-2">
        <select class="custom-select" name="estatus" id="estatus">
            <option selected>seleccionar</option>
            <option value="entregar creditos">entregar creditos</option>
            <option value="creditos entregados">creditos entregados</option>
            <option value="solicitud enviada">solicitud enviada</option>
            <option value="aceptado">aceptado</option>
            <option value="rechazado">rechazado</option>
        </select>
    </div>
</div>
    <button type="submit" class="btn btn-primary float-left">editar</button>
</form>
@if (session('update'))
<div class="alert alert-success mt-3">
    {{session('update')}}
</div>
</div>
</div>
@endif
@endsection