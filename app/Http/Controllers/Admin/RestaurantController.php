<?php

namespace App\Http\Controllers\Admin;

use App\Restaurant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RestaurantController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function add_location()
    {
        return view('admin.location');
    }

    public function add_location_post()
    {
        $data = \request()->all();


        $item = Restaurant::find($data['id']);
        $item->delete();

        $items = Restaurant::where('name','hehe')->get();

        return view('admin.location');
    }

    public function list_location()
    {
        $res = Restaurant::take(10)->get();
//        return $res;
        return view('admin.list_location',['res_list'=>$res]);
    }
}
