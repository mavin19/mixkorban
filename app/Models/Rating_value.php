<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		
		public function ratingIndividual(){
        	return $this->belongsTo('App\Models\Rating_individual');
        }
        public function review(){
        	return $this->belongsTo('App\Models\Review');
    	}
	}
?>