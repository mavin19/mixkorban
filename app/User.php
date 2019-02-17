<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    // /
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    // /
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
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
    public function isRestaurantOwner(){
        $ownerID=\App\models\usertype::where("name","Restaurant owner")->first()->id;
        $userTypeId=Auth::user()->user_type_id;
        return $ownerID == $userTypeId;
    }
}
