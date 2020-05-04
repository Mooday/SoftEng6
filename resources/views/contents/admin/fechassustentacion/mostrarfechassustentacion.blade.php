@extends('layouts.template.template')

@section('content')
    <h3>Administración solicitudes de Sustentación</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fechas de Sustentación pendientes de revisión</h6>
        </div>
        @foreach ($errors->all() as $error)
			<p class = "alert alert-danger">{{ $error }}</p>
		@endforeach

		@if (session('status'))
			<div class = "alert alert-success">
				{{ session('status') }}
			</div>
		@endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th align="center">Identificación</th>
                        <th>Nombre Estudiante 1</th>
                        <th>Nombre Estudiante 2</th>
                        <th>Proyecto</th>
                        <th>Carrera</th>
                        <th>Fecha Solicitud</th>
                        <th>Fecha Última modificación</th>
                        <th>Estado Actual</th>
                        <th>Fecha Sustentación</th>
                        <th>Nuevo Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($fechassustentacion as $fechasus)
                    <tr>

                                <td align="center">
                                    @foreach ($proyectos as $proyecto)
                                        @if ($proyecto->id == $fechasus->id_anteproyecto)
                                            {{$proyecto->id}}
                                        @endif
                                    @endforeach
                                </td>
                                <td align="center">
                                    @foreach ($proyectos as $proyecto)
                                        @if ($proyecto->id == $fechasus->id_anteproyecto)
                                            {{$proyecto->Nombre_estudiante1}}
                                        @endif
                                    @endforeach
                                </td>
                                <td align="center">
                                    @foreach ($proyectos as $proyecto)
                                        @if ($proyecto->id == $fechasus->id_anteproyecto)
                                            {{$proyecto->Nombre_estudiante2}}
                                        @endif
                                    @endforeach
                                </td>
                                <td align="center">
                                    @foreach ($proyectos as $proyecto)
                                        @if ($proyecto->id == $fechasus->id_anteproyecto)
                                            {{$proyecto->Nombre_anteproyecto}}
                                        @endif
                                    @endforeach
                                </td>
                                <td align="center">
                                    @foreach ($carreras as $carrera)
                                        @if ($carrera->id == $fechasus->id_carrera)
                                            {{$carrera->nombre}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$fechasus->created_at}}</td>
                                <td>{{$fechasus->updated_at}}</td>
                                <td>{{$fechasus->estate}}</td>
                            <form action="{{route('admin.fechassustentaciones.update', $fechasus->id)}}"  method="POST" class="float-left">
                                @csrf
                                @method('PUT')
                                <td><input type="date" id="presentacion" name="presentacion" value = "{{ old('presentacion')}}"></td>
                                <td><select name="status">
                                    <option value="Pendiente" @if ($fechasus->estate == "Pendiente")selected @endif >Pendiente</option>
                                    <option value="Asignada" @if ($fechasus->estate == "Asignada")selected @endif >Asignar</option>
                                    <option value="En revision" @if ($fechasus->estate == "En revision")selected @endif >Revisión</option>
                                    <option value="Pospuesta" @if ($fechasus->estate == "Pospuesta")selected @endif >Posponer</option>
                                    <option value="Rechazada" @if ($fechasus->estate == "Rechazada")selected @endif >Rechazadar</option>
                                </select></td>
                        <td>


                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-clipboard-check"></i>
                                </button>

                            </form>

                            <form action="{{route('admin.fechassustentaciones.destroy', $fechasus->id)}}" method="POST" class="float-left">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <a href="{{route('admin.fechassustentaciones.show', $fechasus->id)}}" class="btn btn-primary btn-circle float-left">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
