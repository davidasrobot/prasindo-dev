<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarRentCategory extends Model
{
    public function Car()
    {
        return $this->hasMany('App\CarRent');
    }
}
