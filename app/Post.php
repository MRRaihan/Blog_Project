<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'author_id',
        'tag',
        'title',
        'slug',
        'description',
        'published_at',
        'status',
        'image',
    ];
    protected $dates = [
        'published_at',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
