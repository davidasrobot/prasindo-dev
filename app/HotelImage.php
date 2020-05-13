<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    public function Hotel()
    {
        return $this->belongsTo('App\Hotel', 'hotel_id');
    }
}
