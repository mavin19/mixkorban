<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Feature extends Model
	{
		
		public function res(){
        	return $this->belongsToMany('App\Restaurant');
    	}
	}
?>