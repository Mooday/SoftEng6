@extends('layouts.template.template')
@section('content')
    <h3>Asignar Jurado</h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @foreach($nombre as $estudiante)
            <h6 class="m-0 font-weight-bold text-primary">Asignar Jurado para {{$estudiante->Nombre_estudiante1}}</h6>
            @endforeach
        </div>
        <br>

        <div class="card-body">
            <form action="/notas/jurado/{{ $editjurado->id }}" method="POST">
                @csrf
                {{method_field('PATCH')}}

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Jurado 1</label>
                    <div class="col-md-3">
                        <select class="custom-select" name="id_jurado1" id="id_jurado1">
                            <option selected>Seleccionar...</option>
                            @foreach($profesores as $profesor)
                                <option value="{{$profesor->id}}" name="id_jurado1">{{$profesor->nombre}} {{$profesor->apellido}}</option>
                            @endforeach    
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Jurado 2</label>
                    <div class="col-md-3">
                        <select class="custom-select" name="id_jurado2" id="id_jurado2">
                        <option selected>Seleccionar...</option>
                            @foreach($profesores as $profesor)
                                    <option value="{{$profesor->id}}" name="id_jurado2">{{$profesor->nombre}} {{$profesor->apellido}}</option>
                            @endforeach    
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Hora</label>
                    <div class="col-md-3">
                        <input id="hora" type="text" name="hora" value="" required autofocus>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Código de Nota</label>
                    <div class="col-md-3">
                        <input id="codnota" type="text" name="codnota" value="" required autofocus>
                    </div>
                </div>
                 <br>
                <button type="submit" class="btn btn-success bg-gradient-success float-left">
                    Registrar Jurado
                </button>
            </form>
        </div>
    </div>
@endsection
