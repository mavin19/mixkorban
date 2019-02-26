<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','profile_img','user_type_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment(){
        return $this->hasMany('App\models\Comment');
    }

    public function review(){
        return $this->hasMany('App\models\Review');
    }
    
    public function restaurant_owner()
    {
        return $this->hasOne('App\models\Restaurant_owner');
    }
    
    public function like(){
        return $this->hasMany('App\models\Review', 'review_like');
    }

    public function usertype()
    {
        return $this->belongsTo('App\models\Usertype');
    }

    public function isRestaurantOwner()
    {
        $owner_type_id = \App\models\UserType::where('name','Restaurant owner')->first()->id;
        $current_user_type_id = Auth::user()->user_type_id;
        return $owner_type_id == $current_user_type_id;
    }
}
