<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Feature extends Model
	{
		
		public function review(){
        	return $this->belongsTo('App\Models\Review');
    	}
	}
?>