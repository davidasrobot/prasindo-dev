<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookingCar extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'car_rent_id',
        'start_date',
        'end_date',
        'days'
    ];

    public function Booking()
    {
        return $this->belongsTo('App\Booking');
    }
    public function Package()
    {
        return $this->belongsTo('App\CarRent', 'car_rent_id');
    }
}
