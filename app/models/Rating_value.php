<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine_res extends Model
	{
		
		public function review(){
    		return $this->belongsTo('App\Review');
    	}

    	public function Rating_indivual(){
    		return $this->belongsTo('App\rating_indivual');
    	}
	}
?>