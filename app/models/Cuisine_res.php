<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine_res extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Restaurant');
    	}

    	public function cuisine(){
    		return $this->belongsTo('App\Cuisine');
    	}
	}
?>