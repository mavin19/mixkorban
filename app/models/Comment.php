<?php
<<<<<<< HEAD
namespace App\Models;
<<<<<<< HEAD
	use Illuminate\Database\Eloquent\Model;
	
	class Cuisine_res extends Model
	{
		protected $fillable = ['comment'];	
		
		public function user(){
    		return $this->belongsTo('App\User');
    	}
=======
=======
namespace App\models;
>>>>>>> e297dd49fb0ef5b0fa3c4d9e3ab30281a99218a9
use Illuminate\Database\Eloquent\Model;
	
class Cuisine_res extends Model
{
	protected $fillable = ['comment'];	
	
	public function user(){
		return $this->belongsTo('App\User');
	}
<<<<<<< HEAD
>>>>>>> 6a973977e78ff5dced1be9e6cdf295a81bdfbd63
=======
>>>>>>> e297dd49fb0ef5b0fa3c4d9e3ab30281a99218a9

	public function review()
	{
		return $this->belongsTo('App\models\Review');
	}
}
?>