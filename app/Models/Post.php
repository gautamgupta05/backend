<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','slug','excerpt','content','featured_image','is_published','published_at'];

    public function user() { return $this->belongsTo(User::class); }
    // optionally auto generate slug when setting title
    public static function booted() {
      static::creating(function($post){
         if(!$post->slug) { $post->slug = Str::slug($post->title).'-'.uniqid(); }
      });
    }
}
