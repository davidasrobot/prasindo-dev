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


// CACHE CLEARER
//Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return response()->json(['message' => 'Routes cache cleared', $exitCode]);
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return response()->json(['message' => 'Config cache cleared', $exitCode]);
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return response()->json(['message' => 'Application cache cleared', $exitCode]);
});

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return response()->json(['message' => 'View cache cleared', $exitCode]);
});