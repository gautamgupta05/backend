<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Post::query();

        if ($request->has('published')) {
            $query->where('is_published', $request->published);
        }

        return PostResource::collection(
            $query->latest()->paginate(10)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post = Post::create($data);

        return new PostResource($post);
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile('featured_image')) {

            if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
                Storage::disk('public')->delete($post->featured_image);
            }

            $data['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update($data);

        return new PostResource($post);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }


    public function publish(Post $post, Request $req)
    {
        $post->is_published = !$post->is_published;
        $post->published_at = $post->is_published ? now() : null;
        $post->save();
        return new PostResource($post);
    }
}
