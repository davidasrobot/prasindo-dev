<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookingTravel extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'pax',
        'travel_package_id',
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
        return $this->belongsTo('App\TravelPackage', 'travel_package_id');
    }
}
