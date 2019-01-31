<?php
namespace App\Model;
	use Illuminate\Database\Eloquent\Model;
	
	class Res_img extends Model
	{
		
		public function res(){
    		return $this->belongsTo('App\Models\Restaurant');
    	}
	}
?>