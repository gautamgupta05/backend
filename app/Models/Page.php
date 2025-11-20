<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
   protected $fillable = [
        'user_id', 'title', 'slug', 'excerpt', 'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($page) {
            if (!$page->slug) {
                $page->slug = Str::slug($page->title) . '-' . uniqid();
            }
        });
    }
}
