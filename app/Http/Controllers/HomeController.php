<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::where('is_published', 1)->latest()->take(6)->get();
        return view('home', compact('posts'));
    }

  
}
