<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

	
class Review   extends Model
	{
		public function user(){
    		return $this->belongsTo('App\User');
    	}
	


    	public function res(){
    		return $this->belongsTo('App\Restaurant');
    	}


    	public function comment()
    	{
        	return $this->hasOne('App\Comment');
    	}

    	public function user(){
        	return $this->belongsToMany('App\User');
    	}

    	public function rating_indiviual(){
        	return $this->belongsToMany('App\Rating_indiviual');
    	}
    }
?>