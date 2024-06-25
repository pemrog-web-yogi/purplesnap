<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['is_public' => 'boolean'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function hasLike()
    {
        return $this->hasOne(Like::class)->where('likes.user_id', Auth::user()->id);
    }
    public function totalLikes()
    {
        return $this->hasMany(Like::class)->count();
    }
    public function getPublicAttribute()
    {
        return $this->where('is_public', '=', true);
    }


    // public function likes()
    // {
    //     return $this->hasMany(Like::class, 'post_id');
    // }
    // public function likedByUser()
    // {
    //     $user = Auth::user();
    //     return $this->likes()->where('user_id', $user->id)->exists();
    // }
    // public function likesCount()
    // {
    //     return $this->likes()->count();
    // }
}
