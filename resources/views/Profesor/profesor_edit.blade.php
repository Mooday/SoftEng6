@extends('layouts.template.template')
@section('content')

<h3>Editar Profesor</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Profesor {{$editprofesor->nombre}} {{$editprofesor->apellido}} </h6>
        </div>
        <br>

        <div class="card-body">
            <form action="/profesores/{{ $editprofesor->id }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}

                <div class="form-group row">
                    <label for="nombre" class="col-md-2 col-form-label text-md-right">Nombre</label>

                    <div class="col-md-2">
                        <input id="nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" value="{{ $editprofesor->nombre }}" required autofocus>

                       
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apellido" class="col-md-2 col-form-label text-md-right">Apellido</label>

                    <div class="col-md-2">
                        <input id="apellido" type="text" class="form-control @error('lastname') is-invalid @enderror" name="apellido" value="{{ $editprofesor->apellido }}" required autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label text-md-right">Status</label>
                    <div class="col-md-3">

                        <div class="input-group mb-3">
                            <select class="custom-select" name="status" id="status">
                                @if ($editprofesor->status == 1)
                                    <option value="0">Inactivo</option>
                                    <option selected value="1">Activo</option>
                                @else
                                    <option selected value="0">Inactivo</option>
                                    <option value="1">Activo</option>
                                @endif    
                            </select>
                        </div>

                    </div>
                </div>
                    <button type="submit" class="btn btn-primary float-left">
                        Update
                    </button>
            </form>
        </div>
    </div>

@endsection