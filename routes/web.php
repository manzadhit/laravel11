<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});


Route::get('/blog', [PostController::class, "index"]);

Route::get('/blog/{post}', [PostController::class, "show"]);

Route::get('/category/{category}', function (Category $category) {
    return view("category", [
        "title" => "category",
        "name" => $category->name,
        "posts" => $category->post
    ]);
});

Route::get("/categories", function () {
    return view("categories", [
        "title" => "categories",
        "categories" => Category::all()
    ]);
});

