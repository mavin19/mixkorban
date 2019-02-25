<?php
	namespace App\models;

	use Illuminate\Database\Eloquent\Model;
    use Backpack\CRUD\CrudTrait;

    class UserType extends Model{

        use CrudTrait;

        protected $fillable = ['name'];

        public function user(){
            return $this->hasMany('App\User');
        }
    }
