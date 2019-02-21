<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    


    public function review_create()
    {

        return view('forms.review_form');
    }
}
