<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Eager load author to avoid per-row queries
        $post = Post::query()
            ->with(['author'])
            ->latest()
            ->get();

        // Lazy eager load remaining relation after the initial query
        $post->load(['category']);

        return view('posts', compact('post'));
    }

    public function show(Post $post)
    {
        $post->load(['author', 'category']);

        return view('post-detail', compact('post'));
    }
}
