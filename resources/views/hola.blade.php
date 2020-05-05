@extends('layouts.template.template')
@section('content')
<!DOCTYPE html>
<html lang="es">
<h3>Registro de Anteproyecto</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registro de Anteproyectos</h6>
        </div>
        <br>

        <div class="card-body">
            <form action="{{url('registroestudiante')}}" method="post">
                @csrf


                <div class="form-group row">
                    <label for="Nombre_anteproyecto" class="col-md-2 col-form-label text-md-right">Nombre del Anteproyecto</label>

                    <div class="col-md-3">
                        <input id="Nombre_anteproyecto" class="form-control" type="text" name="Nombre_anteproyecto" required> 

                    </div>
                </div>

                <div class="form-group row">
                    <label for="Tipo_Anteproyecto" class="col-md-2 col-form-label text-md-right">Tipo de Anteproyecto</label>

                    <div class="col-md-3">
                        <select name="Tipo_Anteproyecto" class="form-control" id="Tipo_Anteproyecto" type="" required>
                        <option value="Tesis" name="Tipo_Anteproyecto">Tesis</option>
                        <option value="Teorico Practico" name="Tipo_Anteproyecto">Teorico Practico</option>
                        <option value="Practica Profesional" name="Tipo_Anteproyecto">Practica Profesional</option>
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="Nombre_estudiante1" class="col-md-2 col-form-label text-md-right">Nombre del primer estudiante </label>

                    <div class="col-md-3">
                        <input id="Nombre_estudiante1" class="form-control" type="text" name="Nombre_estudiante1" value="{{$estudiante->nombre}} {{$estudiante->apellido}}" readonly>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="Cedula_est1" class="col-md-2 col-form-label text-md-right">Cedula del Primer Estudiante</label>

                    <div class="col-md-3">
                        <input id="Cedula_est1" class="form-control" type="text" name="Cedula_est1" value="{{$estudiante->cedula}}" readonly>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="carrera" class="col-md-2 col-form-label text-md-right">Carrera</label>

                    <div class="col-md-6">
                        <select id="Carrera" class="form-control" type="text" name="carrera" required>
                        @foreach($carreras as $carrera)
                        <option value="{{$carrera->nombre}}" name="Carrera">{{$carrera->nombre}}</option>
                        @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="Asesor" class="col-md-2 col-form-label text-md-right">Asesor</label>

                    <div class="col-md-3">
                      <select name="Asesor" class="form-control" id="Asesor">
                      @foreach($profesores as $profesor)
                      <option value="{{$profesor->nombre}} {{$profesor->apellido}}" name=Asesor>{{$profesor->nombre}} {{$profesor->apellido}}</option>
                      @endforeach
                      </select>

                    </div>
                </div>


                <div class="form-group row">
                <h8>IMPORTANTE: Solo debe colocar el nombre  y la cédula de un segundo estudiante si su Anteproyecto sera realizado por dos personas, de lo contrario, omita esta parte. Si su Anteproyecto es del tipo Práctica Profesional, también omita esta parte.</h8>
                </div>

                <div class="form-group row">
                    <label for="Nombre_estudiante2" class="col-md-2 col-form-label text-md-right">Nombre del Segundo Estudiante</label>

                    <div class="col-md-3">
                        <input id="Nombre_estudiante2" class="form-control" type="text" name="Nombre_estudiante2">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="Cedula_est2" class="col-md-2 col-form-label text-md-right">Cedula del Segundo Estudiante</label>

                    <div class="col-md-3">
                        <input id="Cedula_est2" class="form-control" type="text" name="Cedula_est2">

                    </div>
                </div>


                <div class="form-group row">
                      <h7>IMPORTANTE: El campo de Asesor de la Empresa solo debe ser llenado si su anteproyecto es de tipo Práctica Profesional</h7>
                </div>

                <div class="form-group row">
                    <label for="Asesor_empresa" class="col-md-2 col-form-label text-md-right">Asesor de la Empresa</label>

                    <div class="col-md-3">
                        <input id="Asesor_empresa" class="form-control" type="text" name="Asesor_empresa">
                    </div>
                </div>

                <div class="form-group row">
                    <h6>IMPORTANTE: El campo de Nombre de la Empresa solo debe ser llenado si su anteproyecto es de tipo Práctica Profesional</h6>
                </div>

                <div class="form-group row">
                    <label for="Nombre_empresa" class="col-md-2 col-form-label text-md-right">Nombre de la Empresa donde realizará la Practica Profesional</label>

                    <div class="col-md-3">
                        <input id="Nombre_empresa" class="form-control" type="text" name="Nombre_empresa">
                    </div>
                </div>



                    <button type="submit" class="btn btn-primary float-left">
                        Registrar Anteproyecto
                    </button>
            </form>
        </div>
    </div>
  </html>
@endsection
