<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
	
class Bill_info extends Model
{
    protected $fillable = ['first_name','last_name','card_number','cvv','street_address','city','state_region','postal_code','country','phone'];	
    
    public function owner()
    {
        return $this->belongsTo('App\models\Restaurant_owner');
    }
}
?>