<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace'=>'Admin'],function (){
    //// RES
    Route::group(['prefix'=>'res'],function (){
        Route::get('add_location','RestaurantController@add_location')->name("admin.add_location");
        Route::post('add_location_post','RestaurantController@add_location_post')->name("admin.add_location_post");
        Route::get('/','RestaurantController@list_location')->name("admin.list_location");
    });
    ////
});
