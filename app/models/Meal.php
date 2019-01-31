<?php
namespace App\Model;
	use Illuminate\Database\Eloquent\Model;
	
	class Meal extends Model
	{
		
		public function res(){
        	return $this->belongsToMany('App\Models\Restaurant');
    	}
	}
?>