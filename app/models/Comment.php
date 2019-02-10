<?php
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
use Illuminate\Database\Eloquent\Model;
	
class Cuisine_res extends Model
{
	
	public function user(){
		return $this->belongsTo('App\User');
	}
>>>>>>> 6a973977e78ff5dced1be9e6cdf295a81bdfbd63

	public function review()
	{
		return $this->belongsTo('App\Models\Review');
	}
}
?>