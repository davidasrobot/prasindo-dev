<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarRentImage extends Model
{
    public function Car()
    {
        return $this->belongsTo('App\CarRent', 'car_rents_id');
    }
}
