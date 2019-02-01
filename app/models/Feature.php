<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Feature extends Model
	{
		protected $fillable = ['name'];	

		public function res(){
        	return $this->belongsToMany('App\Models\Restaurant');
    	}
	}
?>