<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	
	class Food extends Model
	{
		protected $fillable = ['name', 'price'];	
		
		public function res(){
    		return $this->belongsTo('App\models\Restaurant');
    	}
	}
?>