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
    Route::post('add_location','RestaurantController@add_location')->name("admin.add_location");
    Route::get('/','RestaurantController@list_location')->name("admin.list_location");

    ////
});
