@extends('layouts.template.template')
@section('content')
<h3>Listado de solicitudes para asesor de empresa</h3>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Solicitud</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    <thead>
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
            <td><a href="{{url('asesor_emp', $dato_empresa)}}" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
            @can('delete-users')
            <td>
            <a href="{{url('borrar_nota_empresa/'.$dato_empresa->id)}}" class="btn btn-danger btn-circle" onclick="return confirm('¿Eliminar solicitud?');"><i class="fas fa-trash"></i></a>
            </td>
            @endcan
            @endif
            @endforeach
        </tr>
        @endforeach
    </tbody>

</table>
</div>
</div>
</div>

<div class="pagination justify-content-center">
{{$notas_empresa->links()}}
</div>
@endsection