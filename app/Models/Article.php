<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 
        'content', 
        'image',
        'author',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
