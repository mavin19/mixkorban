<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
	
class Cuisine_res extends Model
{
	protected $fillable = ['comment'];	
	
	public function user(){
		return $this->belongsTo('App\User');
	}

	public function review()
	{
		return $this->belongsTo('App\models\Review');
	}
}
?>