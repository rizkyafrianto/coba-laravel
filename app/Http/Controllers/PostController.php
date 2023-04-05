<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    // basic function
    public function index()
    {
        // menambahkan title sesuai category
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->name;
        }

        return view('posts', [
            "title" => "" . $title,
            "active" => "blog",
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString()
        ]);
    }

    // route binding model (Post to $post)
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
