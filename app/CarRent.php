<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarRent extends Model
{
    public function Category()
    {
        return $this->belongsTo('App\CarRentCategory');
    }

    public function Images()
    {
        return $this->hasMany('App\CarRentImage', 'car_rents_id');
    }

    public function Thumbnail()
    {
        return $this->hasOne('App\CarRentImage', 'car_rents_id');
    }

    public function BookingCar()
    {
        return $this->hasMany('App\BookignCar');
    }
}
