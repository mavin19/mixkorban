<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Meal extends Model
	{
		
		public function res(){
        	return $this->belongsToMany('App\Restaurant');
    	}
	}
?>