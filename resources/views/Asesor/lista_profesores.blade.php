@extends('layouts.template.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de profesores</title>
    <link rel="stylesheet" href="css/sol-style.css">
</head>
<body>

<table id="tprofes" class="table table-hover table-sm">

    <thead class="thead-dark">
        <tr>
            <th>Listado de profesores</th>
        </tr>
    </thead>

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

<div class="pagination justify-content-center">
{{$profesores->links()}}
</div>
</body>
</html>

@endsection