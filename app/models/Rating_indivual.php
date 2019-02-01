<?php
namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		protected $fillable = ['name'];	
		
		public function review(){
        	return $this->belongsToMany('App\Models\Review','rating_value');
    	}
	}
?>