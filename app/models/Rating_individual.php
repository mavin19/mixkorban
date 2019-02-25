<?php
<<<<<<< HEAD:app/models/Rating_indivual.php
namespace App\Models;
=======
namespace App\models;
>>>>>>> e297dd49fb0ef5b0fa3c4d9e3ab30281a99218a9:app/Models/Rating_individual.php
	use Illuminate\Database\Eloquent\Model;
	
	class Rating_individual extends Model
	{
		protected $fillable = ['name'];	
		
		public function review(){
			return $this->hasMany('App\models\Rating_value');
    	}
	}
?>