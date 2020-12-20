<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $primaryKey = 'Id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'Address',
        'AvgRating',
        'Description',
        'Distance',
        'IsOpening',
        'Latitude',
        'Longitude',
        'Name',
        'Status',
    ];

    public function restaurantDetail(){
        return $this->hasMany('App\RestaurantDetail','res_id','Id');
    }
}
