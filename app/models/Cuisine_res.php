<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine_res extends Model
	{
		
		public function Cuisine(){
    		return $this->belongsTo('App\Cuisine');
    	}
	}
?>