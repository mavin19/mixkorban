<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\ Support\ Facades\ Log;

class ReviewController extends Controller
{
    

    public function review_store(Request $request){
       
        $request->validate([
            'title' => 'require',
            'description' => 'require'
        ]);
        $user_id= Auth::user()->id;
        $owner = \App\models\Restaurant_owner::where('u_id',$user_id)->first();
        $restaurant = \App\models\Restaurant::where('owner_id',$owner->id)->first();
        


        $review = new \App\Review;
        $review->title = $request->title;
        $review->description= $request->description;
        $review->restaurant_id = $restaurant->id;
        $review->u_id = $user_id;
        $review->save();
    }
    public function review_create()
    {

        return view('forms.review_form');
    }
}
