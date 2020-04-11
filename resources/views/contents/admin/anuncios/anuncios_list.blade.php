@extends('layouts.template.template')

@section('content')

    <style>
        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
            opacity: 1;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: transparent;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            color: darkgray;
        }

        img {
            margin-bottom: -4px;
            opacity: 1.0;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3>Lista de Anuncios</h3>
        @can('delete-users')
            <a href="{{route('admin.anuncio.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success bg-gradient-success shadow-sm">
                <i class="fas fa-file-alt">
                </i>
                 Crear Anuncio
            </a>
        @endcan
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Anuncios</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Cierre</th>
                        <th>Imagen</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($anuncios as $anuncio)
                        <tbody>
                        <tr>
                            <td>{{$anuncio->title}}</td>
                            <td>{{$anuncio->type}}</td>
                            <td>{{$anuncio->description}}</td>
                            <td>{{$anuncio->start_date}}</td>
                            <td>{{$anuncio->end_date}}</td>
                            <td>{{$anuncio->image}}</td>
                            <td>
                                @can('edit-users')
                                    <a href="#" onclick="openModal();currentSlide({{$anuncio->id}})" class="btn btn-info btn-circle float-left">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                @endcan
                                @can('edit-users')
                                    <a href="{{route('admin.anuncio.edit', $anuncio->id)}}" class="btn btn-primary btn-circle float-left">
                                        <i class="far fa-edit"></i>
                                    </a>
                                @endcan
                                @can('delete-users')
                                    <form action="{{route('admin.anuncio.destroy', $anuncio)}}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                @foreach($anuncios as $anuncio)

                <div class="mySlides">
                    <div class="numbertext">{{$anuncio->title}}</div>
                    <img src="/uploads/anuncios/{{$anuncio->image}}" style="width:100%">
                </div>

                @endforeach

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                {{--<div class="caption-container">
                    <p id="caption"></p>
                </div>--}}

{{--@foreach($anuncios as $anuncio)
                     <div class="column">
                    <img class="demo cursor" src="/uploads/anuncios/{{$anuncio->image}}" style="width:100%" onclick="currentSlide(1)" alt="{{$anuncio->title}}">
                </div>
@endforeach--}}

            </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

@endsection
