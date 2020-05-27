@extends('app')

@section('title')
    Booking
@endsection

@section('content')
    <div class="py-10">
        <div class="row">
            <div class="col-md">
                <div class="card rounded-0 border-0">
                    <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-car-rent.png')}}" alt="lorem picture">
                    <div class="card-body text-center">
                      <a href="/booking/car" class="btn btn-primary rounded-0 px-5">Rent a Car</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card rounded-0 border-0">
                    <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-golf.png')}}" alt="lorem picture">
                    <div class="card-body text-center">
                      <a href="/booking/golf" class="btn btn-primary rounded-0 px-5">Play Golf</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card rounded-0 border-0">
                    <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-golf.png')}}" alt="lorem picture">
                    <div class="card-body text-center">
                      <a href="/booking/travel" class="btn btn-primary rounded-0 px-5">Let's Go Traveling</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card rounded-0 border-0">
                    <img class="card-image-hover rounded-0 w-100" src="{{asset('/images/menu-hotel.png')}}" alt="lorem picture">
                    <div class="card-body text-center">
                      <a href="/booking/custom" class="btn btn-primary rounded-0 px-5">Fit What Your Need.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection