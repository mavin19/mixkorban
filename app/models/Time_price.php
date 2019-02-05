<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Time_price extends Model
{
	protected $fillable = ['currency', 'minPrice', 'maxPrice', 'openTime', 'closeTime'];	
    public function res()
    {
        return $this->belongsTo('App\models\Restaurant');
    }
}