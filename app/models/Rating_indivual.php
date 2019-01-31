<?php
namespace App\Model;
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		
		public function review(){
        	return $this->belongsToMany('App\Models\Review','rating_value');
    	}
	}
?>