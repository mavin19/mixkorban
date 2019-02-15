<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_info extends Model
{
	protected $fillable = ['phone', 'address', 'website'];	

    public function res()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }
}