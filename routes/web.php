<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/golf', 'GolfController@index');
Route::get('/golf/{id}', 'GolfController@show');

Route::get('/car-rent', 'CarRentController@index');
Route::get('/car-rent/{id}', 'CarRentController@show');

Route::get('/hotel', 'HotelController@index');
Route::get('/hotel/{id}', 'HotelController@show');

Route::get('/city-travel', 'TravelController@index');
Route::get('/city-travel/{id}', 'TravelController@show');

Route::get('/booking', 'BookingController@index');

Route::get('booking/invoice/{id}', 'BookingController@show');

Route::get('/booking/golf', 'BookingGolfController@create');
Route::post('/booking/golf', 'BookingGolfController@store');

Route::get('/booking/car', 'BookingCarController@create');
Route::post('/booking/car', 'BookingCarController@store');

Route::get('/booking/travel', 'BookingTravelController@create');
Route::post('/booking/travel', 'BookingTravelController@store');

Route::get('/booking/custom', 'BookingCustomController@create');
Route::post('/booking/custom', 'BookingCustomController@store');

Route::get('/booking/confirm/{id}', 'BookingController@confirm');

Route::get('/booking/success', function () {
    return view('Form.Booking.success');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});