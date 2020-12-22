<?php

namespace App\Http\Controllers\Api\Comment;

use App\Comment;
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

class CommentController extends Controller
{
   public function getList(Request $request){
       try {
           $data = $request->all();
           if(!isset($data['res_id'])){
               return [
                   'success' => false,
                   'message' => 'Res ID lả bắt buộc'
               ];
           }
           $page = $data['page'] ?? 1;
           $limit = $data['limit'] ?? 10;
           $comments = Comment::where('ResId',$data['res_id'])->with(['comment_pictures:CommentId,Url','customer:Id,DisplayName,Avatar'])->paginate($limit);
           return response()->json([
               'status' => 200,
               'data' => $comments,
               'message' => 'Thành công',
               'success' => true
           ]);
       } catch (\Exception $e) {
           return response()->json([
               'status' => 200,
               'data' => [],
               'message' => $e->getMessage(),
               'success' => false
           ]);
       }

   }
}
