<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine extends Model
	{
		protected $fillable = ['name'];	
		
		public function res(){
        	return $this->hasMany('App\models\Restaurant');
    	}
	}
?>