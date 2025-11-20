@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ $page->title }}</h1>

<div class="prose max-w-none">
    {!! nl2br(e($page->content)) !!}
</div>
@endsection
