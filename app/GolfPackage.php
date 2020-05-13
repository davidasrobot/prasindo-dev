<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GolfPackage extends Model
{
    public function Golf()
    {
        return $this->belongsTo('App\Golf', 'golves_id');
    }
    public function Hotel()
    {
        return $this->belongsTo('App\Hotel', 'hotel_id');
    }
    public function BookingGolf()
    {
        return $this->hasMany('App\BookingGolf');
    }
}
