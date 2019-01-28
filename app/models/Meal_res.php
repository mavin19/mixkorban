<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Meal_res extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Restaurant');
    	}
	}
?>