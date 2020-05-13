<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golf extends Model
{
    public function Day()
    {
        return $this->hasMany('App\GolfDaily', 'golves_id');
    }
    public function Include()
    {
        return $this->hasOne('App\GolfInclude', 'golves_id');
    }
    public function IncludeImage()
    {
        return $this->hasMany('App\GolfIncludeImage', 'golves_id');
    }
    public function Package()
    {
        return $this->hasMany('App\GolfPackage', 'golves_id');
    }
}
