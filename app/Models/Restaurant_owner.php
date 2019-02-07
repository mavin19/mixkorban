<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
	
class Restaurant_owner extends Model
{
	protected $fillable = ['phone','address'];	
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bill_info()
    {
        return $this->hasOne('App\models\Bill_info');
    }

    public function restaurant()
    {
        return $this->hasOne('App\models\Restaurant');
    }
}
?>