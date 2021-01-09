<?php

namespace App\Http\Controllers\Api\Comment;

use App\Comment;
use App\CommentLike;
use App\CommentPicture;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ChangePasswordRequest;
use App\Http\Requests\Account\LoginRequest;
use App\Http\Requests\Account\RegisterRequest;
use App\Http\Requests\Comment\CreateCommentRequest;
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
   public function create(CreateCommentRequest $request){
       $data = $request->all();
       $data['CreatedOnTimeDiff'] = date('d-m-Y',time());
       $data['AvgRating'] = $data['PositionRating'] + $data['PriceRating'] + $data['QualityRating'] + $data['ServiceRating'] + $data['SpaceRating'];
       $data['AvgRating'] = round($data['AvgRating']/5,1);
       $comment = Comment::create($data);
       if($comment){
           $res = Restaurant::find($data['ResId']);
           if($res){
               $res->update([
                   'AvgRating'=> round(($res['AvgRating'] + $data['AvgRating'])/2,1),
                   'QualityRating'=> round((($res['QualityRating'] ?? $data['AvgRating'] ) + $data['QualityRating'])/2,1),
                   'PositionRating'=> round((($res['PositionRating'] ?? $data['AvgRating'] ) + $data['PositionRating'])/2,1),
                   'PriceRating'=> round((($res['PriceRating'] ?? $data['AvgRating'] ) + $data['PriceRating'])/2,1),
                   'ServiceRating'=> round((($res['ServiceRating'] ?? $data['AvgRating'] ) + $data['ServiceRating'])/2,1),
                   'SpaceRating'=> round((($res['SpaceRating'] ?? $data['AvgRating'] ) + $data['SpaceRating'])/2,1),
                   'TotalReviews' => $res['TotalReviews'] + 1
               ]);
           }
           if(!empty($data['pictures'])){
               $data_insert = [];
               foreach ($data['pictures'] as $picture){
                   $data_insert[] = [
                       'Url' => $picture,
                       'IsFoody' => 0,
                       'CommentId' => $comment['Id']
                   ];
               }
               CommentPicture::insert($data_insert);
               $pictures = CommentPicture::where('CommentId',$comment['Id'])->get(['Url'])->toArray();
           }
           return [
               'success' => true,
               'message' => __('success'),
               'data' => [
                   'comment' => $comment,
                   'pictures' => $pictures ?? []
               ]
           ];
       }
       return [
           'success' => false,
           'message' => __('fail')
       ];
   }
    public function like(){
        $comment_id = \request()->comment_id;
        if(!isset($comment_id)){
            return [
                'success' => false,
                'message' => __('is_required',['name'=>'Comment ID'])
            ];
        }
        $customer = Auth::guard('api')->user();
        $comment = Comment::find($comment_id);
        if($comment){
            $comment_like = CommentLike::where('IdOwner', $customer['Id'])->where('IdComment',$comment_id)->first();
            if($comment_like){
//                return $comment_like;
                $comment->update(['TotalLike'=>$comment['TotalLike']-1]);
                CommentLike::where('IdOwner', $customer['Id'])->where('IdComment',$comment_id)->delete();
            }else{
                $comment->update(['TotalLike'=>$comment['TotalLike']+1]);
                CommentLike::create([
                    'IdOwner'=>$customer['Id'],
                    'IdComment'=>$comment_id,
                    'CreatedAt'=>time(),
                    'UpdatedAt'=>time()]);
            }

            return [
                'success' => true,
                'data' => $comment['TotalLike'],
                'message' => __('success')
            ];

        }
        return [
            'success' => false,
            'message' => 'Không tìm thấy'
        ];
    }

    public function getCommentImage(){
       $data = \request()->all();
       $user = Auth::guard('api')->user();
       $rs = CommentPicture::whereHas('comment',function ($q) use($user){
           $q->where('Owner_id',$user['Id']);
       })->pluck('Url');
       return [
           'success' =>true,
           'data' => $rs
       ];
    }
}
