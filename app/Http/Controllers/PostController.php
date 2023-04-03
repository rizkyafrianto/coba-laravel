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
            "title" => "",
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    // route binding model (Post to $post)
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
