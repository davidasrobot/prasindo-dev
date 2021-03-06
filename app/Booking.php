<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $table = 'bookings';
    protected $fillable = [
        'id', 'fullname', 'phone', 'email', 'total', 'dp', 'due_date', 'email_verified_at', 'uuid'
    ];

    public function Car()
    {
        return $this->hasOne('App\BookingCar');
    }

    public function Golf()
    {
        return $this->hasOne('App\BookingGolf');
    }

    public function Travel()
    {
        return $this->hasOne('App\BookingTravel');
    }
}
