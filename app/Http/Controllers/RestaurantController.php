<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantRequest;

use App\models\Restaurant;
class RestaurantController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('auth');  
    }


    public function index_restaurant()
    {
        $restaurants = Restaurant::all();
        $data = [
            'restaurants' => $restaurants
        ];
        return view('restaurant',$data);
    }

    public function restaurant_detail($id)
    {
        return view('restaurant_detail');
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

    public function getArrayOfIndex($table , $array ,$field)
    {   
        $ids = array();
        foreach($array as $value)
        {
            $id = $table->where($field, $value)->first()->id;
            if($id == null)
                return null;
            $ids[] = $id;
        }

        return $ids;
    }

    public function store_restaurant(RestaurantRequest $request)
    {
        dd($request->file());
        $request->validated();
        $cuisine_table = \App\models\Cuisine::all();
        $meal_table = \App\models\Meal::all();
        $province_table = \App\models\Province::all();
        $feature_table = \App\models\Feature::all();

        $owner_id = \App\models\Restaurant_owner::where('u_id',Auth::user()->id)->first()->id;

        // dd($request->all());
        // id arry for attaching many to many 
        $cusine_IDs = $this->getArrayOfIndex($cuisine_table, $request->cusine, 'name');
        $meal_IDs = $this->getArrayOfIndex($meal_table, $request->meal, 'name');
        $province_IDs = $this->getArrayOfIndex($province_table, $request->location, 'name');
        $feature_IDs = $this->getArrayOfIndex($feature_table, $request->feature, 'name');

        // $fileNameToStore_arr = array();

        // dd();
        // dd(count($request->input('location')));
        $restaurant = new \App\models\Restaurant;
        $restaurant->name = $request->restaurantName;
        $restaurant->detail = $request->description;
        $restaurant->veganOpt = $request->has('vegan');
        $restaurant->isPublish = $request->has('publish');
        $restaurant->phoneNumber = $request->phonenumber;
        $restaurant->address = $request->address;
        $restaurant->website = $request->website;
        $restaurant->owner_id = $owner_id;

        $restaurant->save();

        // // saving the images
        if($request->hasFile('imgs'))
        {
            foreach($request->file('imgs') as $file)
            {
                $fileNameWithExt = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $file->storeAs('public/restaurant_imgs', $fileNameToStore);
                
                // save image path 
                $res_img = new \App\models\Restaurant_img;
                $res_img->file_loc = $fileNameToStore;
                $res_img->restaurant_id = $restaurant->id;
                $res_img->save();
            }   
        }else
        {
            $fileNameToStore = 'no_restaurant_img.jpg';
            $res_img = new \App\models\Restaurant_img;
            $res_img->file_loc = $fileNameToStore;
            $res_img->restaurant_id = $restaurant->id;
            $res_img->save();
        }

        

        // attach many to many 
        $restaurant->cuisines()->attach($cusine_IDs);
        $restaurant->meals()->attach($meal_IDs);
        
        $restaurant->provinces()->attach($province_IDs);
        
        $restaurant->features()->attach($feature_IDs);

        return redirect('');
    }   
}