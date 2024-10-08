<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'content',
        'image',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getContent()
    {
        return  $this->content;
    }
    public function getUserId()
    {
        return  $this->user_id;
    }

    //Comments 
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
