@extends('app')

@section('title')
    City Travel - DKI Jakarta
@endsection

@section('header')
    <div class="w-100">
        <h1 class="h1 position-absolute text-header">City Tour
            {{$travels->city}}
            {{$travels->location}}</h1>
        <img class="img-fluid w-100" src="{{Voyager::image( $travels->hero_image )}}" alt="{{$travels->city}}-travel-prasindo" />
    </div>
@endsection
@section('content')
    <div class="py-5">
        <h3 class="h3 text-center mb-5 text-capitalize">{{$travels->category}} City Tour</h3>
        <img class="w-100 img-fluid mh-400px" src="{{Voyager::image( $travels->banner_image )}}" alt="{{$travels->city}}-travel-prasindo">
    </div>

    <div class="py-5">
        <h4 class="h4 text-uppercase text-center mb-5">CITY TOUR ITINERARY:</h4>
        <div class="col-10 mx-auto">
            <div class="row list">
                @php
                    $explode = explode('; ', $travels->Packages()->first()->itinerary)
                @endphp
                @foreach ($explode as $e)
                    <div class="col-md-4">
                        <li>{{$e}}</li>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 pb-5 text-center">
        <h3 class="h3">Tour Destination</h3>
        <p class="w-75 mx-auto my-3">Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.</p>
    </div>
@endsection

@section('content-no-container')
@php
    $i = 1;
@endphp
    @foreach ($travels->day as $d)
        <div class="container-fluid py-5">
            <div class="row">
                @if ($i % 2 == 0)
                    <div class="col-md-6 tour-slider pr-0 order-md-1">
                @else
                    <div class="col-md-6 tour-slider pl-0 order-md-3">
                @endif
                    <img class="w-100" src="{{Voyager::image( $d->image )}}" alt="{{$d->day}}-travel-prasindo">
                </div>
                <div class="col-md-6 py-5 pr-0 pl-md-5 order-md-2">
                    <div class="w-75 mx-auto">
                        <h1 class="h1 font-italic mb-5">{{$d->day}}</h1>
                        <ul class="pl-3 list">
                            @php
                                $explode_activities = explode('; ',$d->activities);
                            @endphp
                            @foreach ($explode_activities as $activities)
                                <li class="mb-2">{{$activities}}</li>                                
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @php
            $i++;
        @endphp
    @endforeach

    <div class="container">

        <div class="py-5">
            <h3 class="h3 text-center">Tour Includes</h3>
            <div class="row tour-includes">
                @foreach ($travels->include as $include)
                    <div class="col-6 col-md-4 mb-5">
                        <img class="w-100" src="{{Voyager::image( $include->image )}}" alt="{{$include->description}}-travel-prasindo">
                        <div class="text-center">
                            <h5 class="h5 mt-3">{{$include->description}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-center">*Minimums 4 paxs Travel Together</p>
        </div>

        <div class="py-5">
            <h3 class="h3 text-center">Package Excludes</h3>
            <p class="w-75 mx-auto py-3">Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.</p>
            <div class="py-5 w-50 mx-auto">
                <div class="row list">
                    <div class="col-md-6 py-2">
                        <li class="pl-3">Flight Tickets</li>
                    </div>
                    <div class="col-md-6 py-2">
                        <li class="pl-3">Lunch & Dinner</li>
                    </div>
                    <div class="col-md-6 py-2">
                        <li class="pl-3">Caddy Tips</li>
                    </div>
                    <div class="col-md-6 py-2">
                        <li class="pl-3">Personal Expenses</li>
                    </div>
                    <div class="col-md-6 py-2">
                        <li class="pl-3">Travel Insurance</li>
                    </div>
                    <div class="col-md-6 py-2">
                        <li class="pl-3">Personal Guide & Driver Tips</li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <h3 class="h3 text-center">Package Pricing</h3>
        <p class="w-75 mx-auto py-3">Ea voluptate pariatur sit laborum mollit veniam voluptate velit velit elit. Esse ut sit aute commodo voluptate. Duis qui deserunt sit est reprehenderit eu ut occaecat. Proident eiusmod cupidatat voluptate deserunt commodo ipsum cillum duis.</p>
        <div class="py-5 w-75 mx-auto table-responsive">
            <table class="table table-striped">
                @foreach ($travels->Packages as $package)
                    <thead>
                        <tr>
                            <th>Hotel</th>
                            <th>{{$package->name_price_seven}} Person</th>
                            <th>{{$package->name_price_six}} Person</th>
                            <th>{{$package->name_price_five}} Person</th>
                            <th>{{$package->name_price_four}} Person</th>
                            <th>{{$package->name_price_three}} Person</th>
                            <th>{{$package->name_price_two}} Person</th>
                            <th>{{$package->name_price_one}} Person</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$package->hotel->name}}</td>
                            <td>
                                {{(
                                    substr($package->price_seven, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_seven, 2))}}
                            </td>
                            <td>
                                {{(
                                    substr($package->price_six, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_six, 2))}}
                            </td>
                            <td>
                                {{(
                                    substr($package->price_five, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_five, 2))}}
                            </td>
                            <td>
                                {{(
                                    substr($package->price_four, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_four, 2))}}
                            </td>
                            <td>
                                {{(
                                    substr($package->price_three, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_three, 2))}}</td>
                            <td>
                                {{(
                                    substr($package->price_two, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_two, 2))}}    
                            </td>
                            <td>
                                {{(
                                    substr($package->price_one, 0,4) == "call"
                                    ? "Call" :"Rp.".number_format($package->price_one, 2))}}    
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    {{-- <div class="container-fluid barlow py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="w-md-75 mx-auto">
                    <h2 class="h2">Interest?</h2>
                    <h1 class="h1 my-5">LET SEE
                        WHAT YOU
                        WILL GET</h1>
                    <p class="w-75 opacity-50">There are many Facilities that you
                        can get</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="slider-for">
                    @for ($i = 1; $i < $total=6; $i++)
                        <div>
                            <div class="text-white position-absolute interest-image-title">
                                <p>
                                    Hotel Santika Jakarta
                                </p>
                                <p class="text-right">
                                    {{$i}}/ {{$total}}
                                </p>
                            </div>
                            <img class="ml-auto w-100" src="{{asset('images/interest.png')}}" alt="packet interest">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="container-fluid slider-nav-container">
                <div class="w-md-75">
                    <div class="slider-nav">
                        @for ($i = 1; $i < 6; $i++)
                            <div>
                                <img class="img-fluid p-1" src="{{asset('images/interest-nav.png')}}" alt="interest">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-5">
        <div class="text-center">
            <h3 class="h3">What Are You Waiting For?</h3>
            <p class="py-5">Let us to give you an amazing experience and journey, Click the button for book this package</p>
            <button class="btn btn-primary px-5 text-uppercase font-weight-bold rounded-0">
                book now
            </button>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('.slick-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            arrows:true,
            prevArrow: '<button class="btn prev rounded-circle"><i class="fa fa-chevron-left"></i></button>',
            nextArrow: '<button class="btn next rounded-circle"><i class="fa fa-chevron-right"></i></button>',
            slidesToScroll: 1
        });
        $('.slider-for').not('slick-initialize').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').not('slick-initialize').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows:true,
            infinite:false,
            prevArrow: '<button class="btn prev rounded-circle"><i class="fa fa-chevron-left"></i></button>',
            nextArrow: '<button class="btn next rounded-circle"><i class="fa fa-chevron-right"></i></button>',
        });
    </script>
@endsection