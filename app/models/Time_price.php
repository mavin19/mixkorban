<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time_price extends Model
{
    /**
     * Get the user that owns the phone.
     */
    public function res()
    {
        return $this->belongsTo('App\Restaurant');
    }
}