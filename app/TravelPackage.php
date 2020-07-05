<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TravelPackage extends Model
{
    public function Travel()
    {
        return $this->belongsTo('App\Travel', 'travel_id');
    }
    public function Hotel()
    {
        return $this->belongsTo('App\Hotel', 'hotel_id');
    }
}
