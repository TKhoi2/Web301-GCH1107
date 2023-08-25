<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Follow extends Model
{
    use HasFactory;
    protected $table='follow';
    protected $fillable=['userId', 'postId'];

    public function post() {
        return $this->belongsTo(Post::class, 'postId');
    }

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }
}
