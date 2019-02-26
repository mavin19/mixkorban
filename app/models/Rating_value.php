<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		
		public function ratingIndividual(){
        	return $this->belongsTo('App\models\Rating_individual');
        }
        public function review(){
        	return $this->belongsTo('App\models\Review');
    	}
	}
?>