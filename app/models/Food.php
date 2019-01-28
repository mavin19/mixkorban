<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Food extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Restaurant');
    	}
	}
?>