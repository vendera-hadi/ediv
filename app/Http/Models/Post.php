<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function scopeArticle($query)
    {
        return $query->where('type', 'article');
    }

    public function scopeNews($query)
    {
        return $query->where('type', 'news');
    }

    public function scopeEvent($query)
    {
        return $query->where('type', 'event');
    }
}
