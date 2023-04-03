<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    // basic function
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            // "posts" => Post::all()
            // solve N+1 problem with() eager load 
            "posts" => Post::with('category')->latest()->get()
        ]);
    }

    // route binding model (Post to $post)
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "post" => $post
        ]);
    }
}
