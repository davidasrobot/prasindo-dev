@extends('app')

@section('title')
    {{$cars->name}}
@endsection

@section('header')
    <div class="container">
        <div class="single-item">
            @foreach ($cars->images as $c)    
                <div>
                    <img class="py-5 img-fluid w-100" src="{{ Voyager::image($c->image) }}" alt="{{$c->name}}" />
                </div>
            @endforeach
        </div>
        <h3 class="h3 text-center mb-5">{{$cars->name}}</h3>
    </div>
@endsection
@section('content')
    <div class="specs">
        <h5 class="h5 text-uppercase my-5">car spesification</h5>
        <table class="table">
            <tbody class="text-uppercase">
              <tr>
                <td class="py-4">Fuel</td>
                <td class="py-4">{{$cars->fuel}}</td>
              </tr>
              <tr>
                <td class="py-4">capacity</td>
                <td class="py-4">{{$cars->capacity}}</td>
              </tr>
              <tr>
                <td class="py-4">transmission type</td>
                <td class="py-4">{{$cars->transmission_type}}</td>
              </tr>
            </tbody>
        </table>
    </div>
    <div class="specs">
        <h5 class="h5 text-uppercase my-5">Available Package</h5>
        <table class="table">
            <tbody class="text-uppercase">
              @foreach ($cars->Packages as $item)
                <tr>
                    <td class="py-4">{{$item->destination}}</td>
                    <td class="py-4">Rp. {{number_format($item->price, 2)}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    <div class="py-10 text-center">
        <h3 class="h3">Are You Ready for New Adventure?</h3>
        <p class="py-3">Let us to give you an amazing experience and journey, Click the button for rent this car</p>
        <a href="/booking/car" class="btn btn-primary px-5 rounded-0 text-uppercase">rent now</a>
    </div>
    <div class="card-item-slider py-7">
        <h5 class="py-3 text-center">OTHER CAR</h5>
        <div class="slick-slider" id="other-car">
            @foreach ($lists as $l)
                <div class="col-4">
                    <div>
                        <div class="position-absolute text-white card-caption">
                            <h5>{{$l->merk}}</h5>
                            <h6 class="text-uppercase">{{$l->name}}</h6>
                        </div>
                        <img class="card-image-hover rounded-0 w-100" src="{{ Voyager::image( str_replace('.png', '-thumbnail.png', $l->Thumbnail->image) ) }}" alt="{{$l->Thumbnail->name}}">
                        <div class="text-center">
                            <a class="btn btn-outline-dark text-uppercase font-weight-bold rounded-0 px-5 my-4" href="/car-rent/{{$l->id}}">
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
                    dots: false,
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    arrows:false
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
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