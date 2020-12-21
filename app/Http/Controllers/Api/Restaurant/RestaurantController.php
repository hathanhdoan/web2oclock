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
       return Restaurant::take(2)->inRandomOrder()->get();

       $user_location = is_array($request->user_location) ? $request->user_location : json_decode($request->user_location);
       if(!isset($user_location)){
           return [
               'success' =>false,
               'message' => __('no_location_permission')
           ];
       }

       $limit = $request->limit ?? 10;
       $page  = $request->page ?? 1;

//       $from_location = [
//           'Latitude' => 10.8139,
//           'Longitude' => 106.717
//       ];
       $res = Restaurant::with('restaurantDetail')->get()->toArray();
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
       return \response()->json([
           'success' => true,
           'message' => __('success'),
           'data' => $rs
       ]);
   }
   public function getSavedRes(Request $request){
       $data = $request->all();
       if(!isset($data['customer_id'])){
           return [
               'success' => false,
               'message' => 'Customer ID lả bắt buộc'
           ];
       }
       $customer = Customer::find($data['customer_id']);
       if($customer){
           $limit = $data['limit'] ?? 10;
           $page  = $data['page'] ?? 1;
           $saved_res = !empty($customer['SavedRes']) ? json_decode($customer['SavedRes']) : [] ;
           $rs = Restaurant::whereIn('Id',$saved_res)->get();
           return [
               'success'=> true,
               'message' => __('success'),
               'data' => $rs
           ];

       }
       return [
           'success' => false,
           'message' => 'Không tìm thấy'
       ];
   }
}
