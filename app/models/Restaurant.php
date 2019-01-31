<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Restaurant extends Model
{
    use CrudTrait;
    // protected $model = "restaurants";
    protected $fillable = ['name','detail'];
    

}
