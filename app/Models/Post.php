<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['post_adi','post_icerigi','image','more_image','category','post_url','video_url','user_id','meta_tag','files','status'];
}
