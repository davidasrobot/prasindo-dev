<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BookingCustomCity extends Model
{
    protected $fillable = [
        'city'
    ];
    public function CutomBooking()
    {
        return $this->belongsTo(BookingCustom::class);
    }
}
