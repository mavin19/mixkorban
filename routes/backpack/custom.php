<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('province', 'ProvinceCrudController');
    CRUD::resource('features', 'FeaturesCrudController');
    CRUD::resource('provinces', 'ProvinceCrudController');
    CRUD::resource('provinces', 'ProvincesCrudController');
    CRUD::resource('user_types', 'UserTypesCrudController');
    CRUD::resource('usertypes', 'UserTypesCrudController');
}); // this should be the absolute last line of this file