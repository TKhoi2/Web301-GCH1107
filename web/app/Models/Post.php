<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'picture'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userfollowed() {
        return $this->hasMany(Follow::class, 'postId', 'id');
    }

    public function postcomments() {
        return $this->hasMany(Comment::class, 'postId', 'id');
    }

    public function postlikes() {
        return $this->hasMany(Like::class, 'postId', 'id');
    }

    public function userliked() {
        return $this->hasMany(Like::class, 'postId', 'id');
    }
}
