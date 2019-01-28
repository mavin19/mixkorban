<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine extends Model
	{
		
		public function res(){
        	return $this->belongsToMany('App\Restaurant');
    	}
	}
?>