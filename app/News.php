<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'summary', 'content', 'video', 'featured', 'comment', 'state', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function visits(){
        return $this->belongsToMany(Visit::class)->withTimestamps();
    }
}
