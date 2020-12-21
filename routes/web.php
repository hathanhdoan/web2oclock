<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>'locale'],function (){
    Route::group(['namespace'=>'Web'],function (){
        Route::get('change-language/{language}', 'WebController@changeLanguage')->name('user.change-language');
        Route::get('/login', function () {
            return view('Web.Account.login');
        });

        Route::get('/', 'WebController@index');

        Route::get('res-detail/{id}', 'WebController@getDetail');

        Route::get('/profile', function () {
            return view('Web.Pages.profile');
        });

        Route::get('/new-res', function () {
            return view('Web.Pages.new-res');
        });
        Route::get('/more-res', function () {
            return view('Web.Pages.more-res');
        });
    });
    Route::get('/create-xml', 'CreateXmlController@create');
    Route::get('/test', function (){
        return view('Web.Pages.test');
    });
});

Route::get('auth/google', 'Api\Account\AccountController@redirectToGoogle');
Route::get('auth/google/callback', 'Api\Account\AccountController@handleGoogleCallback');
