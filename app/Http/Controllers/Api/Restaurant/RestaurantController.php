<?php

namespace App\Http\Controllers\Api\Restaurant;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ChangePasswordRequest;
use App\Http\Requests\Account\LoginRequest;
use App\Http\Requests\Account\RegisterRequest;
use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class RestaurantController extends Controller
{
   public function getNearestRes(Request $request){
       $user_location = $request->user_location;
       if(!isset($user_location)){
           return [
               'success' =>false,
               'message' => __('no_location_permission')
           ];
       }
       if(isset($request->pagination)){
           $pagination = is_array($request->pagination) ? $request->pagination : json_decode($request->pagination);
       }
       $limit = $pagination['limit'] ?? 10;
       $page  = $pagination['page'] ?? 1;

//       $from_location = [
//           'Latitude' => 10.8139,
//           'Longitude' => 106.717
//       ];
       $res = Restaurant::all()->toArray();
       foreach ($res as $key=>$value) {
           $res[$key]['distance'] = haversine($user_location, $value);
       }
       usort($res,function ($a, $b){
           if ($a['distance'] == $b['distance']) {
               return 0;
           }
           return ($a['distance'] < $b['distance'])?-1:1;
       });
       $rs = array_slice($res, ($page*$limit - $limit), $limit);
       return [
           'success' => true,
           'message' => __('success'),
           'data' => $rs
       ];
   }
}
