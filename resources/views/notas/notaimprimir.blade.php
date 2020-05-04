@extends('layouts.template.template')
@section('content')

<h2>Imprimir Nota para Jurado</h2>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Imprimir Nota para Jurado</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Anteproyecto</th>
                        <th>Jurado1</th>
                        <th>Jurado2</th>
                        <th>Fecha Sustentación</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    
                    @foreach($dataanteproyecto as $data)
                    <tbody>
                    <tr>
                        <td>{{$data->Nombre_estudiante1}}</td>
                        <td>{{$data->Nombre_anteproyecto}}</td>
                        
                        @foreach($profesores as $profe)
                            @if(($profe->id) == ($data->id_jurado1))
                                <td>{{$profe->nombre. ' ' .$profe->apellido}}</td>
                            @endif
                        @endforeach
                        @foreach($profesores as $profe)
                            @if(($profe->id) == ($data->id_jurado2))
                                <td>{{$profe->nombre. ' ' .$profe->apellido}}</td>
                            @endif
                        @endforeach
                        <td>{{$data->sustentationdate}}</td>

                        <td>
                        <a class="btn btn-info" style="width: 100%;" href="{{url('imprimir-pdf/jurado/'.$data->id)}}"> Generar Nota</a>
                        </td>
                        
                    </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection