<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',       // The title of the blog post
        'content',     // The body/content of the blog post
        'author',      // The author of the blog post
        'category',    // The category the post belongs to
        'published_at' // The date and time the post was published
    ];
    
}
