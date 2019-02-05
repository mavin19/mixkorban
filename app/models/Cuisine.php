<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine extends Model
	{
		
		public function res(){
        	return $this->belongsToMany('App\Models\Restaurant');
    	}
	}
?>