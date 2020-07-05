@extends('app')

@section('title')
    Car Rental
@endsection

@section('header')
    <div class="w-100">
        <h1 class="h1 position-absolute text-header">Car
            Rental</h1>
        <img class="img-fluid w-100" src="{{asset('images/list-cars.png')}}" alt="list-car-header" />
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
        <h5 class="py-3">MINIBUS</h5>
        @if ($minibuses->count() >= 4)
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
        @else
        <div class="row">
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
        @endif
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">MINIVAN</h5>
        @if ($minivans->count() >= 4)
        <div class="slick-slider">
            @foreach ($minivans as $vans)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$vans->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$vans->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$vans->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $vans->thumbnail->image) ) }}" alt="{{$vans->thumbnail->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row">
            @foreach ($minivans as $vans)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$vans->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$vans->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$vans->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $vans->thumbnail->image) ) }}" alt="{{$vans->thumbnail->name}}">
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
        <img class="w-100 img-fluid my-5" src="{{asset('/images/car-banner.png')}}" alt="car-banner">
        <p class="text-center w-75 mx-auto">
            Exercitation cupidatat laboris ea pariatur irure tempor consectetur duis. Id excepteur nisi consequat labore aliqua pariatur ad dolor. Exercitation proident Lorem non proident incididunt sit. 
        </p>
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">LUXURY CAR</h5>
        @if ($luxuries->count() >= 4)
        <div class="slick-slider">
            @foreach ($luxuries as $lux)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$lux->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$lux->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$lux->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $lux->thumbnail->image) ) }}" alt="{{$lux->thumbnail->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row">
            @foreach ($luxuries as $lux)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$lux->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$lux->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$lux->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $lux->thumbnail->image) ) }}" alt="{{$lux->thumbnail->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <div class="card-item-slider py-5">
        <h5 class="py-3">BUS</h5>
        @if ($buses->count() >= 4)
        <div class="slick-slider">
            @foreach ($buses as $bus)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$bus->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$bus->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$bus->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $bus->thumbnail->image) ) }}" alt="{{$bus->thumbnail->name}}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row">
            @foreach ($buses as $bus)
            <div class="col-3 pl-0">
                <div>
                    <div class="position-absolute text-white card-caption">
                        <h6 class="text-uppercase">{{$bus->name}}</h6>
                        <h6 class="text-uppercase text-small">{{$bus->merk}}</h6>
                    </div>
                    <a href="/car-rent/{{$bus->id}}">
                        <img class="card-image-hover w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $bus->thumbnail->image) ) }}" alt="{{$bus->thumbnail->name}}">
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