<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Restaurant extends Model
{
    use CrudTrait;
    protected $model = "restaurants";

    protected $fillable = ['name','detail','veganOpt','isPublish'];

    public $primaryKey='id';
 
    public function restaurant_owner(){
    	return $this->belongsTo('App\models\Restaurant_owner');
    } 

    public function res_img(){
        return $this->hasMany('App\models\Restaurant_img');
    }

     public function meal(){
        return $this->hasMany('App\models\Meal');
    }

    public function review(){     
        return $this->hasMany('App\models\Review');
    }

    
    public function food(){
        return $this->hasMany('App\models\Food');
    }

    public function contact_info()
    {
        return $this->hasOne('App\models\Contact_info');
    }

    public function time()
    {
        return $this->hasOne('App\models\Time_price');
    }

    public function feature()
    {
        return $this->hasMany('App\models\Feature');
    }

    public function cuisine()
    {
        return $this->hasMany('App\models\Cuisine');
    }

    public function province()
    {
        return $this->belongsMany('App\models\Province');
    }
}
