<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		
		public function review(){
        	return $this->belongsToMany('App\Review');
    	}
	}
?>