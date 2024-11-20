<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'community_id', 
        'comment_id', 
        'user_id', 
        'content', 
        'images',
    ];

    public function community()
    {
        return $this->belongsTo(Community::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relasi ke komentar induk.
     
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    //Relasi ke komentar balasan.
    public function replies()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }
}
