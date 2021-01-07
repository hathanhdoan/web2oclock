<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantDetail extends Model
{
    protected $table = 'restaurant_details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable =[
        'res_id',
        'res_id',
        'street_address',
        'district',
        'city',
        'price',
        'category_id',
        'open_time',
        'close_time',
        'min_price',
        'max_price',
        'open_time_am',
        'open_time_pm',
        'close_time_am',
        'close_time_pm',
    ];
    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
}
