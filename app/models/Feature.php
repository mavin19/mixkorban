<?php
namespace App\models;
	use Illuminate\Database\Eloquent\Model;
	use Backpack\CRUD\CrudTrait;
	
	class Feature extends Model
	{
		use CrudTrait;
		protected $table = 'features';
		protected $fillable = ['name'];	

		public function res(){
        	return $this->hasMany('App\models\Restaurant');
    	}
	}
?>