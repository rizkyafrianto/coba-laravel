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
            "title" => "Blog",
            "posts" => Post::all()
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
