<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Res_img extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Models\Restaurant');
    	}
	}
?>