@extends('layouts.template.template')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Registro de Eventos</div>
                    <div class="card-body">
                        <a href="{{ url('/registro_eventos/create') }}" class="btn btn-success btn-sm" title="Add New registro_evento">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/registro_eventos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre De Actividad</th><th>Tipo Registro</th><th>Recursos Utilizados</th><th>Direccion De Necesidades</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registro_eventos as $item)
                                    <tr>
                                        
                                        <td>{{ $item->Nombre_de_Actividad}}</td><td>{{ $item->Tipo_registro }}</td><td>{{ $item->Recursos_utilizados }}</td><td>{{ $item->Direccion_de_necesidades }}</td>
                                        <td>
                                            <a href="{{ url('/registro_eventos/' . $item->id) }}" title="View registro_evento"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/registro_eventos/' . $item->id . '/edit') }}" title="Edit registro_evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/registro_eventos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete registro_evento" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registro_eventos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
