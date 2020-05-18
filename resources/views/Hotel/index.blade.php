@extends('app')

@section('title')
    Hotel
@endsection

@section('header')
    <div class="w-100">
        <h1 class="h1 position-absolute text-header">Hotel</h1>
        <img class="img-fluid w-100" src="{{asset('images/hotel-hero.png')}}" alt="list-car-header" />
    </div>
@endsection
@section('content')
    <div class="py-7">
        <h3 class="h3 text-center">We Recommend The Best Hotel</h3>
        <p class="text-center">
            Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.
        </p>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3 text-uppercase">NATIONAL</h5>
        <div class="slick-slider">
            @foreach ($nationals as $national)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$national->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$national->location}}</h6>
                    </div>
                    <a href="/hotel/{{$national->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $national->ImageThumbnail->image) ) }}" alt="{{$national->ImageThumbnail->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3 text-uppercase">INTERNATIONAL</h5>
        <div class="slick-slider">
            @foreach ($internationals as $inter)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$inter->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$inter->location}}</h6>
                    </div>
                    <a href="/hotel/{{$inter->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $inter->ImageThumbnail->image) ) }}" alt="{{$inter->ImageThumbnail->name}}">
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
                    dots: false,
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    arrows:false,
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows:false,
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection