<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function Images()
    {
        return $this->hasMany('App\HotelImage', 'hotel_id');
    }
    public function ImageThumbnail()
    {
        return $this->hasOne('App\HotelImage', 'hotel_id');
    }
}
