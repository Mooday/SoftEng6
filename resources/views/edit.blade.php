@extends('layouts.template.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Editar el campo del Estado</h1>      
    </header>  
             
                <form action="{{url('/anteproyectosregistrados/'.$dato->id)}}" method="post" enctype="multipart/form-data">
              
                {{ csrf_field() }}
                {{ method_field('PATCH')}}
                <p>
                <label for="estado">Selecione el Estado</label><br/>
                <select name="Estado" id="estado"><br/>
                @foreach($estadosss as $estado)
                <br/><option value="{{$estado->Nombre_estado}}" name=Estado>{{$estado->Nombre_estado}}</option><br/>
                @endforeach
                </p>
                <p>
                <br/><input type="submit" value="Guardar Cambios"><br/>
                </p>
                </form>

</body>
</html>
@endsection