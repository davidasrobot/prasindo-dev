<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Travel extends Model
{
    public function Day()
    {
        return $this->hasMany('App\TravelDaily', 'travel_id');
    }
    public function Include()
    {
        return $this->hasMany('App\TravelInclude', 'travel_id');
    }
}
