<?php

namespace App\Http\Controllers\Web;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\RestaurantDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function changeLanguage($lang){
        Session::put('website_language', $lang);

        return redirect()->back();
    }

    public function profile(){
        return view('Web.Pages.profile');
    }
    public function index(Request $request){
        $new_res = Restaurant::with(['restaurant_detail'])->take(10)->get();
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

        $comments = Comment::where('ResId',$res['Id'])->with(['comment_pictures:CommentId,Url,IsFoody','customer:Id,DisplayName,Avatar,IsFoody'])->paginate(10);
        $args = [
            'res' => $res,
            'comments' => $comments,
        ];
        return view('Web.Pages.res-detail',$args);
    }
}
