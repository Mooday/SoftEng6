@extends('layouts.template.template')

@section('content')

    <h3>Crear Nota para el Jurado</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="{{url('anteproyectosregistrados')}}" enctype="multipart/form-data" method="GET">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Cédula:</label>
                    <div class="col-md-3">
                        <input id="cedula" type="text" name="cedula" value="" required autofocus>
                    </div>
                </div>    
                <button type="submit" class="btn btn-success bg-gradient-success float-left">Buscar</button>
            </form>
        </div>
        <br>
    </div>

@endsection
