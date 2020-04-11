@extends('layouts.template.template')
@section('content')

<link rel="stylesheet" href="css/sol-style.css">
<h1 id="h1-center">Solicitudes para asesor de empresa</h1>

<table id="lista_notas" class="table table-striped table-sm">
    
    <thead class="thead-dark">
    <tr>
        <th>Estudiante</th>
        <th>Cédula</th>
        <th>Empresa</th>
        <th>Fecha de solicitud</th>
        <th></th>
        @can('delete-users')
        <th></th>
        @endcan
    </tr>
    </thead>

    <tbody>
    @foreach($notas_empresa as $dato_empresa)
        <tr>
            @foreach($estudiantes as $estudiante)
            @if($estudiante->id == $dato_empresa->id_estudiante)
            <td>{{$estudiante->nombre.' '.$estudiante->apellido}}</td>
            <td>{{$estudiante->cedula}}</td>
            <td>{{$dato_empresa->nombre_empresa}}</td>
            <td>{{$dato_empresa->created_at}}</td>
            <td id="ver-sol-btn"><a id="ver_sol_pe" href="{{url('asesor_emp', $dato_empresa)}}" class="btn btn-primary">Ver</a></td>
            @can('delete-users')
            <td id="ver-sol-btn">
            <a href="{{url('borrar_nota_empresa/'.$dato_empresa->id)}}" class="btn btn-danger" onclick="return confirm('¿Eliminar solicitud?');">Eliminar</a>
            </td>
            @endcan
            @endif
            @endforeach
        </tr>
        @endforeach
    </tbody>

</table>

<div class="pagination justify-content-center">
{{$notas_empresa->links()}}
</div>

@endsection