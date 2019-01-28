<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine_res extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Restaurant');
    	}

    	public function Cuisine_res(){
        	return $this->hasMany('App\Cuisine_res');
    	}
	}
?>