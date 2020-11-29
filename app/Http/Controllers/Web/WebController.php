<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;
class WebController extends Controller
{
    public function getRestaurantDetail(){
        $id = \request()->id;
        $res = Restaurant::find($id);
        if($res){

        }
    }
}
