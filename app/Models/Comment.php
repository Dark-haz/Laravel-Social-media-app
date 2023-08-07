<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Fields that can be filled by user
    protected $fillable=[
         'description'
    ];

     //relashionship to user
     public function user(){
        return $this->belongsTo(User::class,'user_id');
     }

    //relashionship to post
     public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }



}
