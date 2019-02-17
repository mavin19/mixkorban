<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\ Support\ Facades\ Log;

// Models
use App\models;

class RestaurantOwnerController extends Controller
{
    public function ownerRegisterStore(Request $request)
    {  
        $validatedData = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email',
            'address' => 'required',
            'phone' => 'required',
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
        $user->profile_img = 'Change this column to nullable later';
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
            return redirect()->intended('');
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
}
