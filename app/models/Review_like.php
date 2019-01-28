<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

	
class Review_like extends Model
	{
		
		public function user(){
    		return $this->belongsTo('App\User');
    	}

    	public function review(){
    		return $this->belongsTo('App\Review');
    	}

	}
?>