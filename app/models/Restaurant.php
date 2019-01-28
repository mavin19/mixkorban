<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $model = "restaurants";

    public $primaryKey='id';

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function meal_res(){
        return $this->hasMany('App\meal_res');
    }

    public function cuisine_res(){
        return $this->hasMany('App\cuisine_res');
    }

    public function res_img(){
        return $this->hasMany('App\res_img');
    }

     public function meal(){
        return $this->hasMany('App\meal');
    }
}
