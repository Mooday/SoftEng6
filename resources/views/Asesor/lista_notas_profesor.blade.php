@extends('layouts.template.template')
@section('content')
<h3>Listado de solicitudes para profesor asesor</h3>
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
            <th>Fecha de solicitud</th>
            <th>Ver</th>
            @can('delete-users')
            <th>Borrar</th>
            @endcan
        </tr>
    </thead>

    <tbody>
    @foreach($notas_asesor as $nota_a)
        <tr>
        @foreach($estudiantes as $estudiante)
        @if($nota_a->id_estudiante == $estudiante->id )
            <td>{{$estudiante->nombre.' '.$estudiante->apellido}}</td>
            <td>{{$estudiante->cedula}}</td>
            <td>{{$nota_a->created_at}}</td>
    
            <td><a href="{{url('solicitud/asesor', $nota_a)}}" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>

    @can('delete-users')
    <td>    
    <form action="{{url('solicitud/asesor/'.$nota_a->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('¿Eliminar solicitud?');">
            <i class="fas fa-trash"></i>
        </button>
        </form>
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
{{$notas_asesor->links()}}
</div>

@endsection