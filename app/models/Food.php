<?php
namespace App\Model;
	use Illuminate\Database\Eloquent\Model;
	
	class Food extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Models\Restaurant');
    	}
	}
?>