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

Route::get('/', function () {
    return view('welcome');
});

// Rout::resource('/restaurant');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/web', function(){
    return "hellow world";
});


// // test controler
// Route::get('/controller/{id}', 'Test\TestController@routTesting');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
