@extends('layouts.template.template')

@section('content')

    <h3>Crear Autoridad</h3>

    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Crear Anuncio</h6>
        </div>  -->
        <br>

        <div class="card-body">
            <form action="{{url('/autoridades/agregar')}}" enctype="multipart/form-data" method="POST">
                @csrf
                {{method_field('POST')}}

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Nombre</label>
                    <div class="col-md-3">
                        <input id="nombre" type="text" name="nombre" value="" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Apellido</label>
                    <div class="col-md-3">
                        <input id="apellido" type="text" name="apellido" value="" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Cargo</label>
                    <div class="col-md-3">
                        <input id="cargo" type="text" name="cargo" value="" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label text-md-right">Status</label>
                    <div class="col-md-3">

                        <div class="input-group mb-3">
                            <select class="custom-select" name="status" id="status">
                                <option selected>Selecciona...</option>
                                <option value="0">Inactivo</option>
                                <option value="1">Activo</option>
                            </select>
                        </div>

                    </div>
                </div>
                 <br>
                <button type="submit" class="btn btn-success bg-gradient-success float-left">
                    Crear Autoridad
                </button>
            </form>
        </div>
    </div>


@endsection
