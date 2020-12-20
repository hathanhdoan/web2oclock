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
        'price',
        'category_id',
        'open_time',
        'min_price',
        'max_price',
    ];

}
