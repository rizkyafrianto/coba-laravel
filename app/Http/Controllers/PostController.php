<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    // fitur sederhana search
    /*public function index(Request $request)
    {
        if ($request) {
            $posts = Post::where('title', 'like', '%' . $request->search . '%')->orWhere('body', 'like', '%' . $request->search . '%')->get();
        } else {
            $posts = Post::all();
        }
        return view('home', compact('posts', 'request'), [
            'title' => 'space'
        ]);
    }*/

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
            "title" => $title,
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString()
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
