<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookingGolf extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'pax',
        'golf_package_id',
        'start_date',
        'end_date',
        'days',
        'notes'
    ];

    public function Booking()
    {
        return $this->belongsTo('App\Booking');
    }
    public function Package()
    {
        return $this->belongsTo('App\GolfPackage', 'golf_package_id');
    }
}
