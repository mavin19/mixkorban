<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
	
class Review   extends Model
{
	
	public function res(){
		return $this->belongsTo('App\Models\Restaurant');
	}

	public function comment()
	{
		return $this->hasOne('App\Models\Comment');
	}

	public function like(){
		return $this->belongsToMany('App\User','review_like');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function rating_value(){
		return $this->hasMany('App\Models\Rating_value');
	}

	public function img(){
		return $this->hasMany('App\Models\Review_img');
	}
}
?>