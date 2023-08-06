<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Fields that can be filled by user
    protected $fillable=[
        'title', 'description'
    ];

     //relashionship to user
     public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    //relashionship to comments
    public function tasks(){
        return $this->hasMany(Task::class,'post_id');
    }

}
