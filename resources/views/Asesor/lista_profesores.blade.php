@extends('layouts.template.template')
@section('content')
<h3>Listado de profesores</h3>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profesor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <tbody>
    @foreach($profesores as $profesor)
        <tr>
            <td>
            <div> 
                <a href="{{url('asesor_prof', $profesor)}}" class="btn btn-block btn-sm">{{$profesor->nombre.' '.$profesor->apellido}}</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>

<div class="pagination justify-content-center">
{{$profesores->links()}}
</div>
</body>
</html>
@endsection