<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Travel extends Model
{
    public $table = 'travels';
    public function Day()
    {
        return $this->hasMany('App\TravelDaily', 'travel_id');
    }
    public function Include()
    {
        return $this->hasMany('App\TravelInclude', 'travel_id');
    }
    public function Packages()
    {
        return $this->hasMany('App\TravelPackage', 'travel_id');
    }
}
