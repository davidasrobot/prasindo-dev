<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prasindo - @yield('title')</title>
        <link rel="icon" type="image/png" href="{{asset('/images/logo.png')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slick/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slick/slick/slick-theme.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-0 ">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="brand" src="{{asset('/images/logo.png')}}" alt="logo prasindo">
                </a>
                <button id="open-nav" class="btn btn-light font-size-md mr-3" style="font-size: 20px"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item mx-5 active">
                      <a class="nav-link" href="#destination">Destination</a>
                    </li>
                    <li class="nav-item mx-5">
                      <a class="nav-link" href="#offers">Offers</a>
                    </li>
                    <li class="nav-item mx-5">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a href="/booking/" class="nav-link btn btn-primary rounded-0 text-white px-5 ">
                            Book
                          </a>
                      </li>
                  </ul>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" id="close-nav" class="closebtn"><i class="fa fa-times"></i></a>
                    <a href="#" class="py-5 text-center"><img width="150" src="{{asset('images/logo.png')}}" alt=""></a>
                    <a href="#">Destination</a>
                    <a href="#">Offers</a>
                    <a href="#">About Us</a>
                    <a href="#" class="btn btn-primary px-3 rounded-0 text-white">Book</a>
                  </div>
            </div>
        </nav>

        @yield('header')

        <div class="container mb-5">
            @yield('content')
        </div>

        @yield('content-no-container')

        <div id="footer" class="bg-dark">
            <div class="container">
                <div class="row py-4 border-bottom border-white md-hidden">
                    <div class="col text-uppercase text-white text-center py-1"><a class="text-white text-decoration-none" href="#">destination</a></div>
                    <div class="col text-uppercase text-white text-center py-1"><a class="text-white text-decoration-none" href="#">offers</a></div>
                    <div class="col text-uppercase text-white text-center py-1"><a class="text-white text-decoration-none" href="#">about us</a></div>
                    <div class="col text-uppercase text-white text-center"><a href="#" class="btn btn-primary px-5 rounded-0">Book</a></div>
                </div>
                <div class="row py-4 border-bottom border-white">
                    <div class="pre-line col-12 col-md-5 text-uppercase text-white py-1">
                        <b class="text-uppercase mb-3">address</b>
                        Jl. Nama Jalan 1 Jakarta Pusat, 
                        Jakarta, Indonesia 12950 
                    </div>
                    <div class="pre-line col-12 col-md-5 text-uppercase text-white py-1">
                        <b class="text-uppercase mb-3">telephone</b>
                        +62-8777-0777-7777
                    </div>
                    <div class="pre-line col text-uppercase text-white py-1">
                        <b class="text-uppercase">find us</b>
                        <div class="d-flex mt-3">
                            <a class="text-white" href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-twitter-square fa-2x mx-2"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-youtube fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="py-4 text-center text-white">
                    Copyright &copy; 2020 PRASINDO GOLF & TRAVEL SERVICES Allright Reserved
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/vendor/slick/slick/slick.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        @yield('javascript')
        <script>
            $(document).ready(function () {
                $("#open-nav").click(function () {
                    $("#mySidenav").addClass("sidenav-open");
                });
                $("#close-nav").click(function () {
                    $("#mySidenav").removeClass("sidenav-open");
                });
            });
        </script>
    </body>
</html>