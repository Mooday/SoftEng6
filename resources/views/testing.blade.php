@extends('layouts.anuncios_template')

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

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img width="100px" height="100px" class="img-profile rounded-circle" src="/uploads/avatars/fisc_logo.png">
        </div>
    </a>

    <br>

    <h2 style="text-align:center" class="text-xl font-weight-bold text-gray-800 text-uppercase mb-1">Anuncios FISC</h2><br><br>
        <div class="row">
            @foreach($anuncios as $anuncio)
                <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                                {{--<div class="column">--}}
                        <p id="caption" class="text-xm font-weight-bold text-gray-800 text-uppercase mb-1">{{$anuncio->type}} : {{$anuncio->title}}</p>
                        <img src="uploads/anuncios/{{$anuncio->image}}" style="width:100%" onclick="openModal();currentSlide({{$loop->index + 1}})" class="hover-shadow cursor">
                        <br>
                        <p id="caption" class="text-xm font-weight-bold text-gray-800 text-uppercase mb-1">Informacion: {{$anuncio->description}}</p>
                        <p id="caption" class="text-xm font-weight-bold text-gray-800 text-uppercase mb-1">Del {{$anuncio->start_date}} al {{$anuncio->end_date}}</p>
                                {{--</div>--}}
                    </div>
                </div>
                </div>
            @endforeach

        </div>

    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            @foreach($anuncios as $anuncio)
            <div class="mySlides">
                <div class="numbertext">{{$anuncio->title}}</div>
                <img src="uploads/anuncios/{{$anuncio->image}}" style="width:100%">
                <div class="caption-container">
                    <br>
                    <p id="caption">{{$anuncio->type}} : {{$anuncio->title}}</p>
                    <p id="caption">Informacion: {{$anuncio->description}}</p>
                    <p id="caption">Fecha de Inicio: {{$anuncio->start_date}}</p>
                    <p id="caption">Fecha de Cierre: {{$anuncio->end_date}}</p>
                </div>
            </div>
            @endforeach

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>




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
