<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		protected $fillable = ['name'];	
		
		public function review(){
			return $this->hasMany('App\models\Rating_value');
    	}
	}
?>