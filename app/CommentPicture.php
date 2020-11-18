<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPicture extends Model
{
    protected $table = 'comment_pictures';
    public $timestamps = false;
    protected $fillable = ['Url'];

}
