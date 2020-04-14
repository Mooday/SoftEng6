@extends('layouts.template.template')
@section('content')


<h2>Listado de Autoridades</h2>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listado de Autoridades</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cargo</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($autoridades as $autoridad)
                    <tbody>
                    <tr>
                        <td>{{$autoridad->nombre.' '.$autoridad->apellido}}</td>
                        <td>{{$autoridad->cargo}}</td>
                        @if ($autoridad->status == 1)
                            <td>Activo</td>    
                        @else
                            <td>Inactivo</td>
                        @endif
                        <td>
                            @can('edit-users')
                            <a href="" class="btn btn-primary btn-circle float-left">
                                <i class="far fa-edit"></i>
                            </a>
                            @endcan
                        </td>
                    </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


<div class="pagination justify-content-center">
{{$autoridades->links()}}
</div>

@endsection