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

Route::get('create-xml','CreateXmlController@create');
Route::post('hehe','CreateXmlController@hehe');

Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Account', 'prefix' => 'account'], function () {
        Route::post('/', 'AccountController@register')->name('api.account.regester');
        Route::get('/logout', 'AccountController@logout')->middleware('auth.jwt')->name('api.account.logout');
        Route::post('/login', 'AccountController@login')->name('api.account.login');
        Route::post('/register', 'AccountController@register')->name('api.account.register');
        Route::post('/send-mail', 'AccountController@sendResetPasswordMail')->name('api.account.send_mail');
        Route::put('/reset-password', 'AccountController@resetPassword')->name('api.account.reset_password');
    });
    Route::group(['namespace' => 'Restaurant', 'prefix' => 'res'], function () {
        Route::post('/', 'RestaurantController@getNearestRes')->name('api.res.nearest');
    });
});
