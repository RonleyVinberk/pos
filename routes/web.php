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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Route Dashboards
    Route::get('homes', 'HomeController@index')->name('homes.index');

    // Route Stuffs
    Route::resource('stuffs', 'StuffController');

    // Route Types Stuff
    Route::resource('types_stuff', 'TypeStuffController');

    // Route Suppliers
    Route::resource('suppliers', 'SupplierController');

    // Route Countries
    Route::resource('countries', 'CountryController');

    // Route Provinces
    Route::resource('provinces', 'ProvinceController'); 

    // Route Provinces
    Route::resource('stuffs_out', 'SellingController'); 
});