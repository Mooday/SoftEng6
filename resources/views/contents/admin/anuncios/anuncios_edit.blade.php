@extends('layouts.template.template')

@section('content')



    <h3>Editar Anuncio</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Anuncio</h6>
        </div>
        <br>

        <div class="card-body">
            <form action="{{route('admin.anuncio.update', $anuncios)}}" enctype="multipart/form-data" method="POST">
                @csrf
                {{method_field('PUT')}}

                <div class="form-group row">
                    <label for="title" class="col-md-2 col-form-label text-md-right">Titulo</label>

                    <div class="col-md-3">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $anuncios->title }}" required autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label text-md-right">Tipo de Anuncio</label>

                    <div class="col-md-3">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text @error('title') is-invalid @enderror" for="type">Tipo de Anuncio</label>
                            </div>
                            <select class="custom-select" name="type" id="type">
                                <option selected>Selecciona...</option>
                                <option value="Evento">Evento</option>
                                <option value="Seminario">Seminario</option>
                                <option value="Conferencia">Conferencia</option>
                                <option value="Actividad">Actividad</option>
                                <option value="Acontecimiento">Acontecimiento</option>
                                <option value="Horario de Atencion">Horario de Atencion</option>
                            </select>
                        </div>

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label text-md-right">Descripcion</label>

                    <div class="col-md-3">
                        <textarea id="description" type="text" rows="3" class="form-control @error('description') is-invalid @enderror" name="description" required autofocus>{{ $anuncios->description }}</textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="start_date" class="col-md-2 col-form-label text-md-right">Fecha de Inicio</label>

                    <div class="col-md-3">
                        <input id="start_date" type="date" class="form-control" value="{{ $anuncios->start_date }}" placeholder="dd/mm/yyyy" name="start_date" required>

                        @error('start_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="end_date" class="col-md-2 col-form-label text-md-right">Fecha de Cierre</label>

                    <div class="col-md-3">
                        <input id="end_date" type="date" class="form-control" value="{{ $anuncios->end_date }}" placeholder="dd/mm/yyyy" name="end_date" required>

                        @error('end_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label text-md-right">Imagen del Anuncio</label>

                    <div class="col-md-3">

                        <input type="file" name="image" accept="image/*" required>

                        <div class="help-block with-errors"></div>
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <br>


                <button type="submit" class="btn btn-success bg-gradient-success float-left">
                    Editar Anuncio
                </button>
            </form>
        </div>
    </div>


@endsection
