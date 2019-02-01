<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine extends Model
	{
		protected $fillable = ['name'];	
		
		public function res(){
        	return $this->belongsToMany('App\Models\Restaurant');
    	}
	}
?>