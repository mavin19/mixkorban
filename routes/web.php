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
use Illuminate\Support\Facades\Auth;

Route::get('/', function(){
    return view('home');
})->name('home');

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/web', function(){
    return view("welcome");
});



// // test controler
// Route::get('/controller/{id}', 'Test\TestController@routTesting');


Route::get('/review', function(){
    return view('forms.review_form');
});
Route::get('/restaurant', function(){
    return view('restaurant');
});
Route::get('/detail', function(){
    return view('review_pro');
});
Route::get('/profile', "test\UserProfileController@index");


// restaurant owner
Route::get('/res-owner-register', function(){
    if(!Auth::check())
        // if owner is not login 
        return view('forms.owner_register');
    else
        return redirect('');
})->name('owner-register');
Route::post('/res-owner-store','RestaurantOwnerController@ownerRegisterStore')->name('owner-reg-store');


// payment
Route::get('/payment',function(){
    return view('forms.payment_form');
})->name('payment_form');
Route::post('/payment-store','BillInfoController@bill_info_store')->name('payment_store');


// restaurant 
Route::get('/restaurant-register','RestaurantController@create_restaurant')->name('res-register');
Route::post('/restaurant-store','RestaurantController@store_restaurant')->name('res_store');
//restaurant ower edit
Route::get('/ownerprofileupdate','RestaurantOwnerController@updateForm')->name('edit-restaurant-owner');

Route::group(['prefix' => 'laravel-crud-image-gallery'], function () {
    Route::get('/', 'RestaurantOwnerController@index');
    Route::match(['get', 'post'], 'create', 'RestaurantOwnerController@create');
    Route::match(['get', 'put'], 'update/{id}', 'RestaurantOwnerController@update');
    Route::delete('delete/{id}', 'RestaurantOwnerController@delete');
});

Auth::routes();

