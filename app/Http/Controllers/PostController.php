<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('blog', [
            "title" => "blog",
            "posts" => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post', [
            "title" => "post",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

// <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ipsa recusandae natus, autem minima labore mollitia velit? Magni consectetur, ducimus beatae accusantium consequatur harum ipsa fugiat dolore aut! Inventore, asperiores!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, illo consectetur itaque saepe rerum dolorum nulla quas minima illum debitis ipsam amet excepturi odit magnam! Eos ab consequuntur praesentium esse.</p>
// $post = new App\Models\Post
// $post::create([
//     "title" => "Judul Post Ketiga",
//     "slug" => "judul-post-ketiga",
//     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ipsa recusandae natus, autem minima labore mollitia velit? Magni consectetur, ducimus beatae accusantium consequatur harum ipsa fugiat dolore aut! Inventore, asperiores!",
//     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ipsa recusandae natus, autem minima labore mollitia velit? Magni consectetur, ducimus beatae accusantium consequatur harum ipsa fugiat dolore aut! Inventore, asperiores!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, illo consectetur itaque saepe rerum dolorum nulla quas minima illum debitis ipsam amet excepturi odit magnam! Eos ab consequuntur praesentium esse.</p>",
//     "category_id" => 2
// ])

// $category = new App\Models\Category

// $category::create([
//     "name" => "News",
//     "slug" => "news"
// ])