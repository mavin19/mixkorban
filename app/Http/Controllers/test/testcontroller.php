<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class testcontroller extends Controller
{
    function routTesting($id){
    	if($id<5){
    		return "less than 5";
    	}
    	else{
    		return "bigger or equal 5";
    	}
    }
}
