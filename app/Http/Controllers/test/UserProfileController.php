<?php
namespace App\Http\Controllers\Test;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class UserProfileController extends Controller {
    
   
    public function updateForm(){
        $user = Auth::user();
        $data = [
            'user'=> $user
        ];
        return view('editProfileUser',$data);
    }
    public function index()
    {
        // $userprofile = User::find($id);
        $user = Auth::user();
        $restaurant_owner= \App\models\Restaurant_owner::where('u_id',$user->id )->first();
        $data = [
            'restaurant_owner'=>$restaurant_owner,
            'user'=> $user
        ];
        return view('profile',$data);

        // return View::make('Restaurant_owner_profile.index', array('Restaurant_owner_profile' => $Restaurant_owner_profile));

        //return View::make('userprofile.index')->with('UserProfiles',UserProfile::get());
    }
    public function UeserStore(Request $request)
    {  
        $validatedData = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        if($validatedData->fails())
        {
            return redirect('user-store')->withErrors($validatedData)->withInput();
        }
        
        // first, create user 
        $user = new \App\User;
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->profile_img = 'default_user_img.png';
        $user->user_type_id = $user_type_id;
        $user->save();
    }

    public function update_user_profile(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname'=>'required',
            'email'=>'required|email ',
            'password'=>'nullable',
            'img'=>'file|mimes:jpeg,jpg,png,webp|nullable'
        ]);
        
        $user=Auth::user();
            
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
    
        $user->save();
        $user->save();
        return redirect('/profile');
    }
    
}