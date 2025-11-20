@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Latest Posts</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($posts as $post)
        <div class="bg-white shadow rounded p-4">
            <img src="{{ asset('storage/'.$post->featured_image) }}" class="h-40 w-full object-cover rounded">
            <h2 class="text-xl font-semibold mt-3">{{ $post->title }}</h2>
            <p class="text-gray-600 mt-1">{{ $post->excerpt }}</p>

            <a href="/blog/{{ $post->slug }}" class="text-blue-600 mt-3 inline-block">
                Read More →
            </a>
        </div>
    @endforeach
</div>
@endsection
