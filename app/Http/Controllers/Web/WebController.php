<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function changeLanguage($lang){
        Session::put('website_language', $lang);

        return redirect()->back();
    }
}
