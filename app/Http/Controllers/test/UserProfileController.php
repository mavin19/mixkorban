<?php
namespace App\Http\Controllers\Test;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class UserProfileController extends Controller {
    public function index()
    {
        // $userprofile = User::find($id);
        $user = Auth::user();
        $data = [
            'user'=> $user
        ];
        return view('profile',$data);

        // return View::make('Restaurant_owner_profile.index', array('Restaurant_owner_profile' => $Restaurant_owner_profile));

        //return View::make('userprofile.index')->with('UserProfiles',UserProfile::get());
    }
}