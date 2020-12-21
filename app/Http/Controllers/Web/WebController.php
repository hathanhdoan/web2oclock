<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Restaurant;
use App\RestaurantDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function changeLanguage($lang){
        Session::put('website_language', $lang);

        return redirect()->back();
    }

    public function index(Request $request){
        $new_res = Restaurant::with(['restaurant_detail:open_time'])->take(10)->get();
        $args = [
            'new_res' => $new_res
        ];
        return view('Web.index',$args);
    }
    public function getDetail(Request $request){
        $res = Restaurant::where('Id',$request->id)->with(['restaurant_detail'=>function($q){
            $q->with(['category']);
        }])->first();
        if(!$res){
            abort(404);
        }
        $args = [
            'res' => $res
        ];
        return view('Web.Pages.res-detail',$args);
    }
}
