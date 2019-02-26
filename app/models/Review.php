<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;
	
class Review   extends Model

	{
	protected $fillable = ['title', 'description', 'overallRating', 'review']; 
	
	public function res(){
		return $this->belongsTo('App\models\Restaurant');
	}

	public function comment()
	{
		return $this->hasOne('App\models\Comment');
	}

	public function like(){
		return $this->belongsToMany('App\User','review_like');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function rating_value(){
		return $this->hasMany('App\models\Rating_value');
	}

	public function img(){
		return $this->hasMany('App\models\Review_img');
	}
}
?>