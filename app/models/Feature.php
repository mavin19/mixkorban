<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	
	class Feature extends Model
	{
		protected $fillable = ['name'];	

		public function res(){
        	return $this->belongsToMany('App\models\Restaurant');
    	}
	}
?>