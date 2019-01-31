<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $model = "restaurants";

    public $primaryKey='id';
 
    public function user(){
    	return $this->belongsTo('App\User');
    } 


    public function res_img(){
        return $this->hasMany('App\Models\res_img');
    }

     public function meal(){
        return $this->hasMany('App\Models\meal');
    }

    public function review(){     
        return $this->hasMany('App\Models\Review');
    }

    
    public function food(){
        return $this->hasMany('App\Models\Food');
    }

    public function contact_info()
    {
        return $this->hasOne('App\Models\Contact_info');
    }

    public function time()
    {
        return $this->hasOne('App\Models\Time_price');
    }

    public function meal(){
            return $this->belongsToMany('App\Models\Meal');
        }
    public function feature(){
            return $this->belongsToMany('App\Models\Feature');
        }

    public function cuisine(){
            return $this->belongsToMany('App\Models\Cuisine');
        }
}
