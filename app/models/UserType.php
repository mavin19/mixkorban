<?php
	namespace App\models;

	use Illuminate\Database\Eloquent\Model;

class UserType extends Model{

	protected $fillable = ['usertype'];

    public function user(){
        return $this->hasMany('App\User');
    }
}
?>