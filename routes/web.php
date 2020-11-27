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

Route::get('/', function () {
    return view('Web.index');
});
Route::get('/single-product', function () {
    return view('Web.Pages.single-product');
});

Route::get('/admin/add_location','AdminController@add_location')->name("admin.add_location");
Route::get('/admin/list_location','AdminController@list_location')->name("admin.list_location");
