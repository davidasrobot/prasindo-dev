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

Route::get('booking/invoice/{id}', 'BookingController@show');
Route::post('/booking/golf', 'BookingController@storeGolf');
Route::post('/booking/car', 'BookingController@storeCar');
Route::get('/booking/golf', 'BookingController@index_golf');
Route::get('/booking/car', 'BookingController@index_car');
Route::post('/booking/travel', 'BookingController@storeTravel');
Route::get('/booking/confirm/{id}', 'BookingController@confirm');
Route::get('/booking/success', function () {
    return view('Form.Booking.success');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
