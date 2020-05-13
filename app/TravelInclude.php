<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TravelInclude extends Model
{
    public function Travel()
    {
        return $this->belongsTo('App\Travel', 'travel_id');
    }
}
