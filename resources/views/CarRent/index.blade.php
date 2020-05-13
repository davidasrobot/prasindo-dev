@extends('app')

@section('title')
    list of cars
@endsection

@section('header')
    <div class="w-100">
        <h1 class="h1 position-absolute text-header">Car
            Rental</h1>
        <img class="img-fluid w-100" src="{{asset('images/list-cars.png')}}" alt="list-car-header" />
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
        <h5 class="py-3">MINIBUS</h5>
        <div class="slick-slider">
            @foreach ($minibuses as $minibus)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$minibus->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$minibus->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$minibus->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $minibus->thumbnail->image) ) }}" alt="{{$minibus->thumbnail->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">MINIVAN</h5>
        <div class="slick-slider">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">Toyota</h6>
                            <h6 class="text-uppercase text-small">Avanza</h6>
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
        <img class="w-100 img-fluid my-5" src="{{asset('/images/car-banner.png')}}" alt="car-banner">
        <p class="text-center w-75 mx-auto">
            Exercitation cupidatat laboris ea pariatur irure tempor consectetur duis. Id excepteur nisi consequat labore aliqua pariatur ad dolor. Exercitation proident Lorem non proident incididunt sit. 
        </p>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">LUXURY CAR</h5>
        <div class="slick-slider">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">Toyota</h6>
                            <h6 class="text-uppercase text-small">Avanza</h6>
                        </div>
                        <a href="#">
                            <img class="card-image-hover w-100" src="https://picsum.photos/200/200" alt="lorem picture">
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="card-item-slider py-7">
        <h5 class="py-3">BUS</h5>
        <div class="slick-slider">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-3 pl-0">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h6 class="text-uppercase">Toyota</h6>
                            <h6 class="text-uppercase text-small">Avanza</h6>
                        </div>
                        <a href="#">
                            <img class="card-image-hover w-100" src="https://picsum.photos/200/200" alt="lorem picture">
                        </a>
                    </div>
                </div>
            @endfor
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