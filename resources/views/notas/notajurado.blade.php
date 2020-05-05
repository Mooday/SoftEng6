@extends('layouts.template.template')

@section('content')

<h3>Listado de presentación de Tesis pendientes de Jurado</h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pendientes</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Cédula</th>
                        <th>Fecha Asignada</th>
                        <th>Asignar Jurado</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($pendientes as $asesorpend)
                    <tr>
                    @foreach($sustentaciones as $sustentacion)
                        @if($asesorpend->id_fechassustentaciones == $sustentacion->id )
                        
                            @foreach($anteproyectos as $anteproyecto)
                                @if($sustentacion->id_anteproyecto == $anteproyecto->id )
                                <td>{{$anteproyecto->Nombre_estudiante1}}</td>
                                <td>{{$anteproyecto->Cedula_est1}}</td>
                                <td>{{$sustentacion->sustentationdate}}</td>
                        
                                <td>
                                    <a href="{{url('notas/jurado_asignar', $asesorpend->id)}}" class="btn btn-primary btn-circle float-left">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
