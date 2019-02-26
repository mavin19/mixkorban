<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Restaurant; 
class HomeController extends Controller
{
   
    public function __construct()
    {
        // $this->middleware('auth');  
    }

    public function slide_restaurant()
    {
        $restaurant = Restaurant::find(2);
        $cuisines = $restaurant->cuisines()->getResults();
        $meals = $restaurant->meals()->getResults();
        $features = $restaurant->features()->getResults();
        $time = $restaurant->time()->getResults();
        $data = [
            // 'cuisines' => $cuisines,
            'restaurant' => $restaurant,
            // 'meals' => $meals,
            // 'features' => $features,
            // 'time' => $time,
        ];
        return view('home',$data);
    }
    public function index()
    {
        return view('home');
    }
}
