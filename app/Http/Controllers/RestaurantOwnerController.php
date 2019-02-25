<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\ Support\ Facades\ Log;
use Illuminate\Support\Facades\File;
// Models
use App\models;

class RestaurantOwnerController extends Controller
{
    public function getRestaurant()
    {
        $owner_id = \App\models\Restaurant_owner::where('u_id',Auth::user()->id)->first()->id;
        if($owner_id == null) // if the user is not a restaurant owner, redirect them to home page
            return redirect('');
        
        $restaurant_instance = \App\models\Restaurant::where('owner_id',$owner_id)->first();
        if($restaurant_instance == null) // if restaurant owner doesn't have restaurant yet, redirect them to restaurant register form
            return redirect()->route('res_register');
        
        return view('restaurant_detail',['restaurant'=>$restaurant_instance]);
    }


    public function ownerRegisterStore(Request $request)
    {  
        $validatedData = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email',
            'address' => 'required',
            'phone' => 'required|regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.0-9]*$/',
            'password' => 'required'
        ]);

        if($validatedData->fails())
        {
            return redirect('res-owner-register')->withErrors($validatedData)->withInput();
        }

        $user_type_id = \App\models\UserType::where('name','Restaurant owner')->first()->id;
        
        // first, create user 
        $user = new \App\User;
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->profile_img = 'user_img/default_user_img.png';
        $user->user_type_id = $user_type_id;
        $user->save();
        
        // then restaurant owner
        $owner = \App\models\Restaurant_owner::create([
            'phone' => $request->phone,
            'address' => $request->address,
            'u_id' => $user->id
        ]);
        
        // after the owner has register we login immedietly
        $credential = $request->only('email','password');

        if(Auth::attempt($credential))
        {
            // jam ask kru
            return redirect()->intended('/payment');
        }
        
    }
    public function index()
    {
        // $userprofile = User::find($id);
        $restaurant = Auth::user();
        $data = [
            'user'=> $restaurant
        ];
        return view('profile',$data);
    }

    public function updateForm(){
        $user = Auth::user();
        $restaurant_owner= \App\models\Restaurant_owner::where('u_id',$user->id )->first();
        $data = [
            'restaurant_owner'=>$restaurant_owner,
            'user'=> $user
        ];
        return view('editProfileRestaurantOwner',$data);
    }
    
    public function update_restaurant(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname'=>'required',
            'email'=>'required  |email ',
            'phone'=>'required |regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.0-9]*$/ ',
            'address'=>'required',
            'password'=>'nullable',
            'img'=>'file|mimes:jpeg,png,webp|nullable'
        ]);
        
        $user=Auth::user();
        $restaurant_owner=\App\models\Restaurant_owner::where('u_id',$user->id)->first();
            
        if($request->hasFile('img')){
            $image=$request->file('img');
            $filename=time(). '.' .$image->getClientOriginalExtension();
            // $location=public_path('user_img/' . $filename);
            $path = $image->storeAs('public/user_img', $filename);
            $oldFilename=$user->profile_img;
            
            if($oldFilename != 'default_user_img.png'){
                if(File::exists(public_path('storage\\'.$oldFilename))){
                    // delete & change img data in user table
                    File::delete(public_path('storage\\'.$oldFilename));
                }
            }
            $user->profile_img = $filename;

        }
        
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->email= $request->email;
        if ($request->has('password')){
            $user->password=bcrypt($request->password);
        }
        $restaurant_owner->phone=$request->phone;
        $restaurant_owner->address=$request->address;
        $user->save();
        $restaurant_owner->save();
        return redirect('/profile');
    }

}
