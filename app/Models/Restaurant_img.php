<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	
	class Restaurant_img extends Model
	{
		protected $fillable = ['file_loc'];
		public function res(){
    		return $this->belongsTo('App\models\Restaurant');
    	}
	}
?>