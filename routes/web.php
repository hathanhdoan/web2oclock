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

Route::get('/create-xml', 'CreateXmlController@create');
Route::get('/test', function (){
    return view('test');
});

Route::get('/login', function () {
    return view('Web.Account.login');
});

Route::get('/', function () {
    return view('Web.index');
});

Route::get('/single-product', function () {
    return view('Web.Pages.single-product');
});

Route::get('/profile', function () {
    return view('Web.Pages.profile');
});

Route::get('/new-res', function () {
    return view('Web.Pages.new-res');
});
Route::get('/more-res', function () {
    return view('Web.Pages.more-res');
});
Route::get('auth/google', 'Api\Account\AccountController@redirectToGoogle');
Route::get('auth/google/callback', 'Api\Account\AccountController@handleGoogleCallback');
