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
        $restaurants = Restaurant::paginate(3);

        $data = [
            'restaurant' => $restaurant,
            'restaurants' => $restaurants
        ];
        return view('home',$data);
    }
    public function index()
    {
        return view('home');
    }
}
