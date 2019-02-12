<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
	
class Province extends Model
{
	protected $fillable = ['name'];	
	
    public function restaurant()
    {
        return $this->hasMany('App\models\Restaurant');
    }
}
?>