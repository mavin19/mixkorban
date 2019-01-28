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


    public function res_img(){
        return $this->hasMany('App\res_img');
    }

     public function meal(){
        return $this->hasMany('App\meal');
    }

    public function review(){     
        return $this->hasMany('App\Review');
    }

    
    public function food(){
        return $this->hasMany('App\Food');
    }

    public function contact_info()
    {
        return $this->hasOne('App\Contact_info');
    }

    public function time()
    {
        return $this->hasOne('App\Time_price');
    }

    public function meal(){
            return $this->belongsToMany('App\Meal');
        }
    public function feature(){
            return $this->belongsToMany('App\Feature');
        }

    public function cuisine(){
            return $this->belongsToMany('App\Cuisine');
        }
}
