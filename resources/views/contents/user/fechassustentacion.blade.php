@extends('layouts.template.template')

@section('content')
    <h3>Fechas de Sustentación</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Solicitud de fecha para la Sustentación</h6>
        </div>
        <br>
        @foreach ($errors->all() as $error)
			<p class = "alert alert-danger">{{ $error }}</p>
		@endforeach

		@if (session('status'))
			<div class = "alert alert-success">
				{{ session('status') }}
			</div>
		@endif

        <div class="">
            <form action="" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="id" class="col-md-2 col-form-label text-md-right">Identificación:</label>
                    <div class="col-6">
                        <input id="idnumber" type="text" class="form-control col-5"  name="idnumber" value="{{$estudiante->id}}" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="cedu" class="col-md-2 col-form-label text-md-right">Cedula:</label>
                    <div class="col-6">
                        <input id="cedu" type="text" class="form-control col-5"  name="cedu" value="{{$estudiante->cedula}}" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="nombre" class="col-md-2 col-form-label text-md-right">Nombre:</label>
                    <div class="col-6">
                        <input id="nomb" type="text" class="form-control col-5"  name="nomb" value="{{$estudiante->nombre}} {{$estudiante->apellido}}" readonly>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="asesor" class="col-md-2 col-form-label text-md-right" >Asesor:</label>
                    <div class="col-6">
                        <select name = "asesor" id="asesor" class="form-control col-5">
                             @foreach ($proyectos as $proyecto)
                             <option value="{{$proyecto->Asesor}}">{{$proyecto->Asesor}}</option>
                             @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="idproyecto" class="col-md-2 col-form-label text-md-right">Nombre del proyecto:</label>

                    <div class="col-6">
                        <select name = "idproyecto" id="idproyecto" class="form-control col-10">
                            @foreach ($proyectos as $proyecto)
                                <option value="{{$proyecto->id}}">{{$proyecto->Nombre_anteproyecto}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="carre" class="col-md-2 col-form-label text-md-right">Carrera:</label>
                    <div class="col-6">
                        <input id="carre" type="text" class="form-control col-5"  name="carre" value="{{$carrera->nombre}}" readonly>
                    </div>
                </div>


                <button type="submit" class="col-md-2 btn btn-primary float-left">
                    Solicitar
                </button>

            </form>

        </div>
    </div>

@endsection
