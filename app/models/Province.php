<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Province extends Model
{	
    use CrudTrait;
    protected $table = 'provinces';
	protected $fillable = ['name'];	
	
    public function restaurant()
    {
        return $this->hasMany('App\models\Restaurant');
    }
}
?>