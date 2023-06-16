<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        
        $posts = Post::with('pemilik')->get();
        return view('frontend.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        return view('posts.show', [
            'post' => Post::find($slug)
        ]);
    }
}