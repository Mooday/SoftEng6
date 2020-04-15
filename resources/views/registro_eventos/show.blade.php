@extends('layouts.template.template')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Evento {{ $registro_evento->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/registro_eventos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/registro_eventos/' . $registro_evento->id . '/edit') }}" title="Edit registro_evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('registro_eventos' . '/' . $registro_evento->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete registro_evento" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $registro_evento->id }}</td>
                                    </tr>
                                    <tr><th> Tipo Registro </th><td> {{ $registro_evento->Tipo_registro }} </td></tr><tr><th> Recursos Utilizados </th><td> {{ $registro_evento->Recursos_utilizados }} </td></tr><tr><th> Direccion De Necesidades </th><td> {{ $registro_evento->Direccion_de_necesidades }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
