<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;
	
class Review   extends Model
<<<<<<< HEAD
<<<<<<< HEAD
	{
        protected $fillable = ['title', 'description', 'overallRating', 'review']; 
=======
{
>>>>>>> 6a973977e78ff5dced1be9e6cdf295a81bdfbd63
=======
{
        protected $fillable = ['title', 'description', 'overallRating', 'review']; 
>>>>>>> e297dd49fb0ef5b0fa3c4d9e3ab30281a99218a9
	
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