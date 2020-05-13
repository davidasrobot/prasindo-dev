<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GolfInclude extends Model
{
    public function Golf()
    {
        return $this->belongsTo('App\Golf', 'golves_id');
    }
}
