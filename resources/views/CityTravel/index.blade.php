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
    <div class="py-5">
        <h3 class="h3 text-center">Good Condition Car as Always</h3>
        <p class="text-center">
            Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.
        </p>
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">INBOUND</h5>
        @if ($inbounds->count() >= 4)
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
        @else
            <div class="row">
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
        @endif
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">OUTBOUND</h5>
        @if ($outbounds->count() >= 4)
            <div class="slick-slider">
                @foreach ($outbounds as $out)
                    <div class="col-3 pl-0">
                        <div>
                            <div class="position-absolute text-white card-caption">
                                <h6 class="text-uppercase">{{$out->city}}</h6>
                                <h6 class="text-uppercase text-small">{{$out->location}}</h6>
                            </div>
                            <a href="/city-travel/{{$out->id}}">
                                <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $out->banner_image) ) }}" alt="{{$out->city}}-travel">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                @foreach ($outbounds as $out)
                    <div class="col-3 pl-0">
                        <div>
                            <div class="position-absolute text-white card-caption">
                                <h6 class="text-uppercase">{{$out->city}}</h6>
                                <h6 class="text-uppercase text-small">{{$out->location}}</h6>
                            </div>
                            <a href="/city-travel/{{$out->id}}">
                                <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $out->banner_image) ) }}" alt="{{$out->city}}-travel">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="py-5">
        <h3 class="h3 text-center">
            Great Trip, Start with a Comfort Car
        </h3>
        <img class="w-100 img-fluid my-5" src="{{asset('/images/city-banner.png')}}" alt="car-banner">
        <p class="text-center w-75 mx-auto">
            Exercitation cupidatat laboris ea pariatur irure tempor consectetur duis. Id excepteur nisi consequat labore aliqua pariatur ad dolor. Exercitation proident Lorem non proident incididunt sit. 
        </p>
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">FAVORITE</h5>
        @if ($favorites->count() >= 4)
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
        @else
            <div class="row">
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
        @endif
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">RECOMENDED</h5>
        @if ($recomends->count() >= 4)
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
        @else
        <div class="row">
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
        @endif
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
                    dots: false,
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots:true,
                    arrows:false
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots:true,
                    arrows:false
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection