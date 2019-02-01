<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		
		public function review(){
        	return $this->hasMany('App\Models\Rating_value');
    	}
	}
?>