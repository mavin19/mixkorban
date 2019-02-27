<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\ Support\ Facades\ Log;

class ReviewController extends Controller
{
    

    public function review_store(Request $request){
        $validatedData = Validator::make($request->all(),[
            'title' => 'require',
            'description' => 'require'
        ]);
    }
    public function review_create()
    {
        return view('forms.review_form');
    }
}
