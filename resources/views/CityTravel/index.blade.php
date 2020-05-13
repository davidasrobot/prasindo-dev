@extends('app')

@section('title')
    City Travel
@endsection

@section('header')
    <div class="w-100">
        <h1 class="h1 position-absolute text-header">City
            Travel</h1>
        <img class="img-fluid w-100" src="{{asset('images/city-travel-hero.png')}}" alt="list-car-header" />
    </div>
@endsection
@section('content')
    <div class="py-7">
        <h3 class="h3 text-center">Good Condition Car as Always</h3>
        <p class="text-center">
            Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.
        </p>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">INBOUND</h5>
        <div class="slick-slider">
            @foreach ($inbounds as $inbound)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">{{$inbound->city}}</h6>
                            <h6 class="text-uppercase text-small">{{$inbound->location}}</h6>
                        </div>
                        <a href="/city-travel/{{$inbound->id}}">
                            <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $inbound->banner_image) ) }}" alt="{{$inbound->city}}-travel">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">OUTBOUND</h5>
        <div class="slick-slider">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">jakarta</h6>
                            <h6 class="text-uppercase text-small">dki jakarta</h6>
                        </div>
                        <a href="#">
                            <img class="card-image-hover w-100" src="https://picsum.photos/200/200" alt="lorem picture">
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="py-7">
        <h3 class="h3 text-center">
            Great Trip, Start with a Comfort Car
        </h3>
        <img class="w-100 img-fluid my-5" src="{{asset('/images/city-banner.png')}}" alt="car-banner">
        <p class="text-center w-75 mx-auto">
            Exercitation cupidatat laboris ea pariatur irure tempor consectetur duis. Id excepteur nisi consequat labore aliqua pariatur ad dolor. Exercitation proident Lorem non proident incididunt sit. 
        </p>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">FAVORITE</h5>
        <div class="slick-slider">
            @foreach ($favorites as $favorite)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">{{$favorite->city}}</h6>
                            <h6 class="text-uppercase text-small">{{$favorite->location}}</h6>
                        </div>
                        <a href="/city-travel/{{$favorite->id}}">
                            <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $favorite->banner_image) ) }}" alt="{{$favorite->city}}-travel">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">RECOMENDED</h5>
        <div class="slick-slider">
            @foreach ($recomends as $recomend)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">{{$recomend->city}}</h6>
                            <h6 class="text-uppercase text-small">{{$recomend->location}}</h6>
                        </div>
                        <a href="/city-travel/{{$recomend->id}}">
                            <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $recomend->banner_image) ) }}" alt="{{$recomend->city}}-travel">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('.slick-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            arrows:true,
            prevArrow: '<button class="btn prev rounded-circle"><i class="fa fa-chevron-left"></i></button>',
            nextArrow: '<button class="btn next rounded-circle"><i class="fa fa-chevron-right"></i></button>',
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection