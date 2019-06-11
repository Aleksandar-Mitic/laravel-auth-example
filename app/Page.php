<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'published', 'user_id'];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
