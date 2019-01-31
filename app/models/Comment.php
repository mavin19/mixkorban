<?php
namespace App\Model;
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine_res extends Model
	{
		
		public function user(){
    		return $this->belongsTo('App\User');
    	}

    	public function review()
    	{
        	return $this->belongsTo('App\Models\Review');
    	}
	}
?>