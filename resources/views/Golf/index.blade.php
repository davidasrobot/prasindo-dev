@extends('app')

@section('title')
    Golf Partner
@endsection

@section('header')
    <div class="w-100">
        <h1 class="h1 position-absolute text-header">Our Golf
            Partner</h1>
        <img class="img-fluid w-100" src="{{asset('images/golf-hero.png')}}" alt="list-car-header" />
    </div>
@endsection
@section('content')
    <div class="py-7">
        <h3 class="h3 text-center">The Best Golf Field Just For You</h3>
        <p class="text-center">
            Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.
        </p>
    </div>
@php
    $i=1;
@endphp
    @foreach ($recomends as $r)
    <div class="py-10">
        <div class="row">
            <div class="col-8">
                <img class="w-100" src="{{Voyager::image( $r->banner_image )}}" alt="{{$r->name}}">
            </div>
            @if ($i % 2 == 0)
                <div class="col-4 py-10 order-first">
            @else
                <div class="col-4 py-10">
            @endif
                <h6 class="h6 text-primary">{{$r->city}}, {{$r->location}}</h6>
                <h4 class="h4">{{$r->name}}</h4>
                <p>{{$r->description}}</p>
                <a href="/golf/{{$r->id}}" class="btn btn-outline-primary font-weight-bold text-uppercase rounded-0 px-5">
                    view more
                </a>
            </div>
        </div>
    </div>
    @php
        $i++;
    @endphp
    @endforeach

    <div class="card-item-slider py-10">
        <div class="slick-slider">
            @foreach ($golves as $g)
            <div class="col-4">
                <div>
                    <img class="card-image-hover rounded-0 w-100" src="{{Voyager::image(str_replace('.png', '-thumbnail.png', $g->banner_image))}}" alt="{{$g->name}}">
                    <div class="text-center py-4">
                        <h4>{{$g->name}}</h4>
                        <h6 class="text-uppercase w-75 mx-auto">
                            {{$g->description}}
                        </h6>
                        <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 mt-4" href="/golf/{{$g->id}}">
                            view more
                        </a>
                    </div>
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
            slidesToShow: 3,
            arrows:true,
            prevArrow: '<button class="btn prev rounded-circle"><i class="fa fa-chevron-left"></i></button>',
            nextArrow: '<button class="btn next rounded-circle"><i class="fa fa-chevron-right"></i></button>',
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
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