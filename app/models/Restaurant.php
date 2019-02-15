<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Restaurant extends Model
{
    use CrudTrait;
    protected $model = "restaurants";

    protected $fillable = ['name','detail','phoneNumber','address','website','veganOpt','isPublish'];

    public $primaryKey='id';
 
    public function restaurant_owner(){
    	return $this->belongsTo('App\models\Restaurant_owner');
    } 

    public function res_img(){
        return $this->hasMany('App\models\Restaurant_img');
    }

     public function meals(){
        return $this->belongsToMany('App\models\Meal');
    }

    public function reviews(){     
        return $this->hasMany('App\models\Review');
    }

    
    public function foods(){
        return $this->hasMany('App\models\Food');
    }

    public function time()
    {
        return $this->hasOne('App\models\Time_price');
    }

    public function features()
    {
        return $this->belongsToMany('App\models\Feature');
    }

    public function cuisines()
    {
        return $this->belongsToMany('App\models\Cuisine');
    }

    public function provinces()
    {
        return $this->belongsToMany('App\models\Province');
    }

    public function getOneImgLoc()
    {
        return \App\models\Restaurant_img::where('restaurant_id',$this->id)->first()->file_loc;
    }
}
