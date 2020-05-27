@extends('app')

@section('title')
    Homepage
@endsection

@section('header')
    <div class="w-100">
        <div class="position-absolute text-header hero">
            <h1 class="h1">Amazing Bogor Raya
                Golf Experience</h1>
            <button class="btn btn-light rounded-0 text-uppercase font-weight-bold px-5">view more</button>
        </div>
        <img class="img-fluid w-100" src="{{asset('images/home-hero.png')}}" alt="list-car-header" />
    </div>
@endsection
@section('content')
    <section id="destination">
        <div class="py-10">
            <h3 class="h3 text-center">Enjoy Every Moment</h3>
            <p class="text-center">
                Don't miss every moment with us and enjoy a different sensation every time.
            </p>
        </div>
    
        <div class="card-item-slider py-7">
            <div class="slick-slider" id="other-car">
                {{-- SLIDER MENU --}}

                {{-- start --}}
                <div class="col-4">
                    <div>
                        <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-golf.png')}}" alt="lorem picture">
                        <div class="text-center py-4">
                            <h4>Golf</h4>
                            <h6 class="text-uppercase w-75 mx-auto">
                                Hemmed by jungle and lulled by the lap of the Indian Ocean, the hotel is rich in island spirit
                            </h6>
                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 mt-4" href="/golf">
                                view more
                            </a>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start --}}
                <div class="col-4">
                    <div>
                        <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-hotel.png')}}" alt="lorem picture">
                        <div class="text-center py-4">
                            <h4>Hotel</h4>
                            <h6 class="text-uppercase w-75 mx-auto">
                                Hemmed by jungle and lulled by the lap of the Indian Ocean, the hotel is rich in island spirit
                            </h6>
                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 mt-4" href="/hotel">
                                view more
                            </a>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                
                {{-- start --}}
                <div class="col-4">
                    <div>
                        <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-car-rent.png')}}" alt="lorem picture">
                        <div class="text-center py-4">
                            <h4>Car Rental</h4>
                            <h6 class="text-uppercase w-75 mx-auto">
                                Hemmed by jungle and lulled by the lap of the Indian Ocean, the hotel is rich in island spirit
                            </h6>
                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 mt-4" href="/car-rent">
                                view more
                            </a>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start --}}
                <div class="col-4">
                    <div>
                        <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-golf.png')}}" alt="lorem picture">
                        <div class="text-center py-4">
                            <h4>Travel</h4>
                            <h6 class="text-uppercase w-75 mx-auto">
                                Hemmed by jungle and lulled by the lap of the Indian Ocean, the hotel is rich in island spirit
                            </h6>
                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 mt-4" href="/city-travel">
                                view more
                            </a>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                
            </div>
        </div>
    
        {{-- Destination --}}
        @php
            $i = 0
        @endphp
        @foreach ($golves as $g)
            @foreach ($g->package as $item)
                <div class="row py-10">
                    <div class="col-md-8">
                        <img class="img-fluid" src="{{Voyager::image($item->image)}}" alt="package-2">
                    </div>
                    @if ($i % 2 == 0)
                        <div class="col col-md-4 py-5 order-first">
                    @else
                        <div class="col col-md-4 py-5">
                    @endif
                        <h4 class="h4">{{$item->name}}</h4>
                        <h6 class="text-small">{{$item->day}} Days {{$item->night}} Night</h6>
                        <h5 class="h5 text-orange">IDR {{number_format($item->price, 2)}} / Person</h5>
                        <p class="py-3">{{$item->description}}</p>
                        <a href="/golf/{{$item->Golf->id}}" class="btn btn-outline-primary px-5 text-uppercase rounded-0 font-weight-bold">view more</a>
                    </div>
                </div>
                @php
                    $i++
                @endphp
            @endforeach
        @endforeach
        <div class="row py-10">
            <div class="col-md-4 py-5 order-1">
                <h4 class="h4">Package 1</h4>
                <h6 class="text-small">Weekday, 3 Days 2 Night</h6>
                <h5 class="h5 text-orange">IDR 5.456.196 / Person</h5>
                <p class="py-3">Enjoy three days in vibrant Bogor and play golf at some of the best Indonesian courses.</p>
                <ul class="pl-3">
                    @for ($i = 0; $i < 3; $i++)
                        <li class="mb-2">Luxury accommodation</li>
                    @endfor
                </ul>
                <button class="btn btn-outline-primary px-5 text-uppercase rounded-0 font-weight-bold">view more</button>
            </div>
            <div class="col-md-8">
                <img class="img-fluid" src="{{asset('images/package-1.png')}}" alt="package-1">
            </div>
        </div>
    </section>
@endsection

@section('content-no-container')
    {{-- Offer --}}

    <section id="offers">
        <div class="py-7">
            <div>
                <div class="container">
                    <div class="card-item-slider">
                        <div class="slick-slider" id="other-car">
                            @for ($i = 0; $i < 8; $i++)
                                <div class="col-4">
                                    <div>
                                        <img class="card-image-hover rounded-0 w-100" src="https://picsum.photos/200/200" alt="lorem picture">
                                        <div class="text-center py-4">
                                            <h4>Package 3</h4>
                                            <h6 class="text-uppercase w-75 mx-auto">
                                                5 Days 4 Night at Jakarta
                                                and Bali, Exclusive Golf and Journey.
                                            </h6>
                                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 mt-4" href="#">
                                                view more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="py-10">
                <div class="col col-lg-5 card-absolute-right order-last">
                    <div class="card card-body rounded-0 border-0">
                        <div>
                            <h4 class="h4">Bali Golf and Tour Package</h4>
                        <h5 class="h5 text-orange">IDR 5.456.196 / Person</h5>
                        <p class="py-3">Esse tempor qui enim ut aute cupidatat in dolor magna irure voluptate consequat Lorem. Occaecat ad adipisicing enim Lorem minim ea elit exercitation dolor et ad consequat aliqua.</p>
                        <button class="btn btn-outline-primary px-5 text-uppercase font-weight-bold rounded-0">
                            view more
                        </button>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-9">
                    <img class="img-fluid" src="{{asset('images/golf-tour-package.png')}}" alt="golf-tour-package">
                </div>
            </div>
            <div class="py-10">
                <div class="col col-lg-5 card-absolute-left order-last">
                    <div class="card card-body rounded-0 border-0">
                        <div>
                            <h4 class="h4">Bali Golf and Tour Package</h4>
                        <h5 class="h5 text-orange">IDR 5.456.196 / Person</h5>
                        <p class="py-3">Esse tempor qui enim ut aute cupidatat in dolor magna irure voluptate consequat Lorem. Occaecat ad adipisicing enim Lorem minim ea elit exercitation dolor et ad consequat aliqua.</p>
                        <button class="btn btn-outline-primary px-5 text-uppercase font-weight-bold rounded-0">
                            view more
                        </button>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-9 ml-auto">
                    <img class="img-fluid" src="{{asset('images/golf-tour-package.png')}}" alt="golf-tour-package">
                </div>
            </div>
        </div>
    </section>
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
                    arrows:false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
                {
                breakpoint: 600,
                settings: {
                    arrows:false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
                },
                {
                breakpoint: 480,
                settings: {
                    arrows:false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection