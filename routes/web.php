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
Route::get('/detail', function(){
    return view('review_pro');
});
Route::get('/profile', "test\UserProfileController@index");


// restaurant owner
Route::get('/my-restaurant','RestaurantOwnerController@getRestaurant')->name('my_restaurant');
Route::get('/res-owner-register', function(){
    if(!Auth::check())
        // if owner is not login 
        return view('forms.owner_register');
    else
        return redirect('');
})->name('owner_register');
Route::post('/res-owner-store','RestaurantOwnerController@ownerRegisterStore')->name('owner_reg_store');
Route::post('/restaurant_update','RestaurantOwnerController@update_restaurant')->name('update_restaurant_owner');
Route::get('/ownerprofileupdate','RestaurantOwnerController@updateForm')->name('edit-restaurant-owner');


// payment
Route::get('/payment','BillInfoController@bill_info_create')->name('payment_form');
Route::post('/payment-store','BillInfoController@bill_info_store')->name('payment_store');
//User
Route::get('/userprofileupdate','UserProfileController@updateForm')->name('edit-restaurant-owner');

// restaurant 
// Route::resource('restaurant','RestaurantController');
Route::get('/restaurant-register','RestaurantController@create_restaurant')->name('res_register');
Route::post('/restaurant-store','RestaurantController@store_restaurant')->name('res_store');
Route::get('/restaurants', 'RestaurantController@index_restaurant')->name('res_index');


Auth::routes();

Route::group(['prefix' => 'laravel-crud-image-gallery'], function () {
    Route::get('/', 'RestaurantOwnerController@index');
    Route::match(['get', 'post'], 'create', 'RestaurantOwnerController@create');
    Route::match(['get', 'put'], 'update/{id}', 'RestaurantOwnerController@update');
    Route::delete('delete/{id}', 'RestaurantOwnerController@delete');
});

Route::get('/review_form','ReviewController@review_create')->name('review_form');

Auth::routes();

