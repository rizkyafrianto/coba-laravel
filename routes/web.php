<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// closure
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Muhamad Rizky Afrianto",
        "email" => "rizky@gmail.com",
        "image" => "hanni.jpg"
    ]);
});

// route controller
Route::get('/blog', [PostController::class, 'index']);
// route bind variabel == $
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

// route ini tak diperlukan karena was handle by post 
/* Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        "active" => "categories",
        // solve N+1 problem by lazy eager load load()
        'posts' => $category->posts->load('category')
    ]);
});
*/