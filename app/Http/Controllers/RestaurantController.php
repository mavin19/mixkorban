<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\models;
class RestaurantController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function create_restaurant()
    {
        $restaurant_type_id = \App\models\UserType::where('name','Restaurant owner')->first()->id;
        $auth_type_id = Auth::user()->user_type_id;
        $owner_id = \App\models\Restaurant_owner::where('u_id',Auth::user()->id)->first()->id;
        $bill_info_instance = \App\models\Bill_info::where('owner_id',$owner_id)->first();
        if( $restaurant_type_id != $auth_type_id )
            // if use is not a Restaurant owner ,redirect to home page
            return redirect('');
        
        if( $bill_info_instance == null )
            return redirect()->route('payment_form');

        return view('forms.restaurant_register');
    }

    public function store_restaurant(){}
}