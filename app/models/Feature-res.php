<?php
	use Illuminate\Database\Eloquent\Model;
	
	class Feature_res extends Model
	{
		
		public function feature(){
    		return $this->belongsTo('App\Feature');
    	}

    	public function res(){
    		return $this->belongsTo('App\Restaurant');
    	}
	} 
?>