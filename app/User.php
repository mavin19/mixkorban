<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // /
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    protected $fillable = [
        'name', 'email', 'password',
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
        return $this->hasMany('App\Models\Comment');
    }

    public function res(){
        return $this->hasMany('App\Restaurant');
    }

    public function review(){
        return $this->belongsToMany('App\Review', 'review_like');
    }

    public function usertype()
    {
        return $this->belongsTo('App\Models\Usertype');
    }
}
?>