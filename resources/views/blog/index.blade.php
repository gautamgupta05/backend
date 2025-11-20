@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Blog</h1>

<div class="space-y-6">
    @foreach($posts as $post)
        <div class="bg-white shadow rounded p-5">
            <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
            <p class="text-gray-600">{{ $post->excerpt }}</p>

            <a href="/blog/{{ $post->slug }}" class="text-blue-600 mt-3 inline-block">
                Read More →
            </a>
        </div>
    @endforeach
</div>

<div class="mt-6">
    {{ $posts->links() }}
</div>
@endsection
