<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CarRentPackage extends Model
{
    public function Car()
    {
        return $this->belongsTo('App\CarRent', 'car_rent_id');
    }
}
