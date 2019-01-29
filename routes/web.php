<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rout::resource('/restaurant');

Route::get('/', 'HomeController@index')->name('home');


Route::get('/web', function(){
    return view("welcome");
});
Route::get('/review', function(){
    return view('review_form');
});
Route::get('/restaurant', function(){
    return view('restaurant');
});
Route::get('/detail', function(){
    return view('review_pro');
});
Route::get('/restaurantForm', function(){
    return view('restaurant_owner_register');
});
// test controler
Route::get('/controller/{id}', 'Test\TestController@routTesting');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
