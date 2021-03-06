@extends('app')

@section('title')
    Email Confirmed
@endsection

@section('content')
@if ($confirmed ?? '' == true)
<div class="py-10 px-10 text-center">
    <h1 class="display-3">Email Already Confirmed!</h1>
    <p class="lead">
        <strong>Please check your email</strong>
        for details your booking.
    </p>
    <hr>
    <p>
        Having trouble? <a href="#">Contact us</a>
    </p>
    <p class="lead">
    <a class="btn btn-primary rounded-0 px-5 text-uppercase font-weight-bold" href="/" role="button">
        Back To Homepage
    </a>
    </p>
</div>
@else
<div class="py-10 px-10 text-center">
    <h1 class="display-3">Email Confirmed!</h1>
    <p class="lead">
        <strong>Please check your email</strong>
        for details your booking.
    </p>
    <hr>
    <p>
        Having trouble? <a href="#">Contact us</a>
    </p>
    <p class="lead">
    <a class="btn btn-primary rounded-0 px-5 text-uppercase font-weight-bold" href="/" role="button">
        Back To Homepage
    </a>
    </p>
</div>
@endif
@endsection