@extends('app')

@section('title')
    Hotel - Hotel Name
@endsection

@section('header')
    <div class="container">
        <div class="single-item">
            @foreach ($hotels->images as $h)    
                <div>
                    <img class="py-5 img-fluid w-100" src="{{ Voyager::image($h->image) }}" alt="{{$h->name}}" />
                </div>
            @endforeach
        </div>
        <h3 class="h3 text-center mb-5">{{$hotels->name}}</h3>
        <p class="text-center">
            {{$hotels->description}}
        </p>
    </div>
@endsection
@section('content')

    @for ($i = 0; $i < $count=2; $i++)
    <div class="row py-10">
        @if ($i % 2 == 0)
        <div class="col-4 py-5 order-last">
        @else
        <div class="col-4 py-5">
        @endif
            <h4 class="h4">Package 1</h4>
            <h6 class="text-small">Weekday, 3 Days 2 Night</h6>
            <h5 class="h5 text-orange">IDR 5.456.196 / Person</h5>
            <p class="py-3">Enjoy three days in vibrant Bogor and play golf at some of the best Indonesian courses.</p>
            <ul class="pl-3">
                @for ($ii = 0; $ii < 3; $ii++)
                    <li class="mb-2">Luxury accommodation</li>
                @endfor
            </ul>
            <button class="btn btn-outline-primary px-5 text-uppercase rounded-0 font-weight-bold">view more</button>
        </div>
        <div class="col-8">
            <img src="{{asset('images/package-1.png')}}" alt="package-1">
        </div>
    </div>
    @endfor

    <div class="card-item-slider py-7">
        <h5 class="py-3 text-center">OTHER HOTEL</h5>
        <div class="slick-slider" id="other-car">
            @foreach ($lists as $l)
                <div class="col-4">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h5>{{$l->name}}</h5>
                            <h6 class="text-uppercase">{{$l->location}}</h6>
                        </div>
                        <img class="card-image-hover rounded-0 w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $l->ImageThumbnail->image) ) }}" alt="{{$l->ImageThumbnail->name}}">
                        <div class="text-center">
                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 my-4" href="/hotel/{{$l->id}}">
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
        $('.single-item').slick({
            dots:false,
            arrows:true,
            prevArrow: '<button class="btn prev rounded-circle"><i class="fa fa-chevron-left"></i></button>',
            nextArrow: '<button class="btn next rounded-circle"><i class="fa fa-chevron-right"></i></button>',
        });

        $('.slick-slider').not('.slick-initialized').slick({
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