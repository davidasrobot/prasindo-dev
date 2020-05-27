<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $primaryKey = 'your_key_name';
    public $incrementing = false;
    protected $keyType = 'string';
}
