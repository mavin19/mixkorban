<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	use Backpack\CRUD\CrudTrait;
	
	class Meal extends Model
	{
		use CrudTrait;
		protected $fillable = ['name'];	
		
		public function res(){
        	return $this->hasMany('App\models\Restaurant');
    	}
	}
?>