<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookingCustom extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'adults',
        'children',
        'start_date',
        'end_date',
        'arrival',
        'depature',
        'hostel',
        'hotel',
        'apartement',
        'arrangement',
        'type',
        'notes'
    ];
    public function City()
    {
        return $this->hasMany(BookingCustomCity::class);
    }

}
