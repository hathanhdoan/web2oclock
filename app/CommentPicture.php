<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPicture extends Model
{
    protected $table = 'comment_pictures';
    protected $primaryKey = 'Id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['Url','CommentId'];

}
