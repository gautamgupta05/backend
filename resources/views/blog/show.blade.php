@extends('layouts.app')

@section('content')
<article class="max-w-3xl mx-auto">

    <h1 class="text-4xl font-bold mb-3">{{ $post->title }}</h1>

    <img src="{{ asset('storage/'.$post->featured_image) }}"
         class="w-full h-64 object-cover rounded mb-6">

    <div class="prose max-w-none">
        {!! nl2br(e($post->content)) !!}
    </div>
</article>
@endsection
