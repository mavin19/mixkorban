<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model
	
class Review   extends Model
	{
	
    	public function res(){
    		return $this->belongsTo('App\Models\Restaurant');
    	}


    	public function comment()
    	{
        	return $this->hasOne('App\Models\Comment');
    	}

    	public function user(){
        	return $this->belongsToMany('App\User','review_like');
    	}

    	public function rating_indiviual(){
        	return $this->belongsToMany('App\Models\Rating_indiviual','rating_value');
    	}
    }
?>