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

     //relashionship to post
     public function user(){
        return $this->belongsTo(Post::class,'post_id');
    }



}
