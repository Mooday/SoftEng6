@extends('layouts.template.template')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="pull-left">
                <h2 class="m-0 font-weight-bold text-primary">Listado de Anteproyectos</h2>
                <td>
                    <a href="{{route('Nota_a_Biblioteca')}}" class="btn btn-success" style="float: right;">Crear Nota</a>
                </td>
            </div>
        </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th></th>
                <th>Estudiante 1</th>
                <th>Cedula 1</th>
                <th>Estudiante 2</th>
                <th>Cedula 2</th>
                <th>Carrera</th>
                <th>Titulo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tesina as $tesina)
                <tr>
                <td>{{$tesina->id}}</td>
                <td>{{$tesina->Nombre_estudiante1}}</td>
                <td>{{$tesina->Cedula_est1}}</td>
                <td>{{$tesina->Nombre_estudiante2}}</td>
                <td>{{$tesina->Cedula_est2}}</td>
                <td>{{$tesina->Carrera}}</td>
                <td>{{$tesina->Nombre_anteproyecto}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection