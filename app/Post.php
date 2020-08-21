<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }
}
