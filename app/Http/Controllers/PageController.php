<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('page', compact('page'));
    }

    public function about()
    {
        return view('about', [
            'meta_title' => 'About Us - MyCMS',
            'meta_description' => 'Learn more about our company, mission, and team.',
        ]);
    }
}
