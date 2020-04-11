@extends('layouts.template.template')
@section('content')

<link rel="stylesheet" href="css/sol-style.css">
<h1 id="h1-center">Solicitudes de notas para profesor asesor</h1>

<table id="lista_notas" class="table table-striped table-sm">

    <thead class="thead-dark">
        <tr>
            <th>Estudiante</th>
            <th>Cédula</th>
            <th>Fecha de solicitud</th>
            <th></th>
            @can('delete-users')
            <th></th>
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
    
            <td id="ver-sol-btn"><a id="ver_sol_pe" href="{{url('solicitud/asesor', $nota_a)}}" class="btn btn-primary btn-md">Ver</a></td>
    
    @can('delete-users')
    <td id="ver-sol-btn">    
    <form action="{{url('solicitud/asesor/'.$nota_a->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Eliminar solicitud?');">
        </form>
    </td>
    @endcan
    
        @endif
        @endforeach
        </tr>
        @endforeach
    </tbody>

</table>

<div class="pagination justify-content-center">
{{$notas_asesor->links()}}
</div>

@endsection