<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantRequest;

class RestaurantController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function create_restaurant()
    {
        $owner_type_id = \App\models\UserType::where('name','Restaurant owner')->first()->id;
        $auth_type_id = Auth::user()->user_type_id;
        $owner_id = \App\models\Restaurant_owner::where('u_id',Auth::user()->id)->first()->id;
        $bill_info_instance = \App\models\Bill_info::where('owner_id',$owner_id)->first();
                
        if( $owner_type_id != $auth_type_id )
            // if use is not a Restaurant owner ,redirect to home page
            return redirect('');
        
        if( $bill_info_instance == null )
            // if the owner haven't yet have the bill information,then redirect to the form page
            return redirect()->route('payment_form');

        // data to push to form
        $cusines = \App\models\Cuisine::all();
        $locations = \App\models\Province::all();
        $meals = \App\models\Meal::all();
        $features = \App\models\Feature::all();

        $data = [
            'cusines' => $cusines,
            'locations' => $locations,
            'meals' => $meals,
            'features' => $features
        ];
        

        return view('forms.restaurant_register', $data);
    }

    public function store_restaurant(Request $request)
    {
        // $request->validated();
        dd($request->all());
        // return redirect()->route('res-register')->withInput();
    }
}